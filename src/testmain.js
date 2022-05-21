import 'regenerator-runtime/runtime'
import *  as THREE from 'three'
import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls'
import { FontLoader } from 'three/examples/jsm/loaders/FontLoader'
import { TextGeometry } from 'three/examples/jsm/geometries/TextGeometry'
import jsonPath from '../static/troika_regular.typeface.txt'
import { GUI } from 'dat.gui'
import { Vector3 } from 'three'
import { STLExporter } from 'three/examples/jsm/exporters/STLExporter.js';


//Renderer
var renderer = new THREE.WebGLRenderer();
renderer.setSize(window.innerWidth/2, window.innerHeight/4);
renderer.shadowMap.enabled = true

var container = document.getElementById('canvas-div');
var w = window.innerWidth/2
var h = window.innerHeight/4
//renderer.setSize(500, 200);
container.appendChild(renderer.domElement);



//Add Camera
var camera = new THREE.PerspectiveCamera( 30, w/h, 2, 1000 );

//Add Scene
const scene = new THREE.Scene();
scene.background = new THREE.Color(0x2b2d42);

//Controls
const controls = new OrbitControls(camera, renderer.domElement);
controls.target = new THREE.Vector3(0, 0, -40);
controls.update();

// INIT HEMISPHERE LIGHT
scene.add(new THREE.AmbientLight(0xffffff, 0.5));

//STL Exporting
const params = {
    exportASCII: exportASCII,
    exportBinary: exportBinary
};
let exporter
exporter = new STLExporter();

function exportASCII() {
    //var singleGeometry = new THREE.Geometry();
    //boxMesh.updateMatrix(); // as needed
    //singleGeometry.merge(boxMesh.geometry, boxMesh.matrix);
    const result = exporter.parse(scene.getObjectByName('text')  );
    saveString( result, 'bounding_box.stl' );

}

function exportBinary() {
    const result = exporter.parse( scene.getObjectByName('text'), { binary: true } );
    saveArrayBuffer( result, 'keychain.stl' );
}

const link = document.createElement( 'a' );
link.style.display = 'none';
document.body.appendChild( link );


function save( blob, filename ) {
    link.href = URL.createObjectURL( blob );
    link.download = filename;
    link.click();
}

function saveString( text, filename ) {
    save( new Blob( [ text ], { type: 'text/plain' } ), filename );
}

function saveArrayBuffer( buffer, filename ) {
    save( new Blob( [ buffer ], { type: 'application/octet-stream' } ), filename );
}


//Create Scene with geometry, material-> mesh
const font_loader = new FontLoader();
const textmesh_input = {
    text_field: "sample",
    position_x: 0,
    position_y: 0,
    position_z: 5,
    writable: true
    }
var bounding_box = new THREE.Box3()

function generate_text(input) {
    var text_mesh_pholder = new THREE.Mesh;
    font_loader.load(jsonPath,
        function (font) {
            var test = scene.getObjectByName('text')
            if (test) {
                scene.remove(scene.getObjectByName('text'))
            }
            const textGeometry = new TextGeometry(input, {
                size: 20,
                height: 4,
                font: font,
            })
            
            var html_text_color = parseInt(document.getElementById('color-text').value)
            const text_color = new THREE.Color(html_text_color)
            const textMaterial = new THREE.MeshStandardMaterial({color: text_color});
            text_mesh_pholder = new THREE.Mesh(textGeometry, textMaterial);
            text_mesh_pholder.position.x = 0;
            text_mesh_pholder.position.y = 0;
            text_mesh_pholder.position.z = 0;
            //text_mesh_pholder.rotation.x = - Math.PI / 2;
            text_mesh_pholder.name = 'text';
            scene.add(text_mesh_pholder);
            bounding_box = new THREE.Box3().setFromObject(scene.getObjectByName('text'));
            scene.getObjectByName('text').position.x = -(bounding_box.max.x - bounding_box.min.x)/2;
            scene.getObjectByName('text').position.y = 0;
            scene.getObjectByName('text').position.z = 0;
            //scene.getObjectByName('text').position.z -= (bounding_box.max.z - bounding_box.min.z)/2;
            console.log(bounding_box.max.x)
            console.log(scene.getObjectByName('text').position.x)

            function generate_base() {
                var html_text_color = parseInt(document.getElementById('color-base').value)
                const text_color = new THREE.Color(html_text_color)
                const material = new THREE.MeshStandardMaterial({color: text_color});
                const geometry = new THREE.BoxBufferGeometry(5+ bounding_box.max.x - bounding_box.min.x, 5+ bounding_box.max.y - bounding_box.min.y, bounding_box.max.z - bounding_box.min.z);
                //const material = new THREE.MeshStandardMaterial( {color: 0xFFF89A} );
                const base = new THREE.Mesh(geometry, material);
                base.position.x = (bounding_box.max.x - bounding_box.min.x)/2//text_mesh_pholder.position.x + bounding_box.max.x-  bounding_box.min.x;
                base.position.y = (bounding_box.max.y - bounding_box.min.y) / 2;
                base.position.z = 0;
                //text_mesh_pholder.rotation.x = - Math.PI / 2;
                base.name = "base"
                scene.getObjectByName('text').add( base );
            }
            generate_base()

            function generate_ring() {
                var html_text_color = parseInt(document.getElementById('color-base').value)
                const text_color = new THREE.Color(html_text_color)
                const material = new THREE.MeshStandardMaterial({color: text_color});
                const geometry = new THREE.TorusGeometry( (bounding_box.max.y-bounding_box.min.y)/3, 1, 30, 30 );
                //const material = new THREE.MeshStandardMaterial( { color: 0xFFF89A } );
                const ring = new THREE.Mesh( geometry, material );
                ring.position.x = -2.5
                ring.name = "ring"
                ring.position.z = 0
                ring.position.y = (bounding_box.max.y - bounding_box.min.y)/2
                //ring.scale.z(1)
                //ring.rotation.X(Math.PI / 2)
                //ring.rotateX(-Math.PI / 2)
                scene.getObjectByName('text').add( ring );
            }
            generate_ring()
        });
}
//Events
var input_text = document.getElementById('input-text');
var button_update = document.getElementById('button-update');
button_update.addEventListener('click', function (event) {
    if (input_text.value) {
        generate_text(input_text.value);
        document.getElementById('order-div').style.display = "block";
        this.innerHTML = "Update Preview"
    }
})
var button_order = document.getElementById('button-order')
button_order.addEventListener('click', function (event) {
    exportASCII()
})

camera.position.z = 90;
camera.position.x = 10;
camera.position.y = 10;

function animate() {
    requestAnimationFrame( animate );

    //cube.rotation.x += 0.01;
    //cube.rotation.y += 0.01;

    renderer.render( scene, camera );
};

animate();