
import 'regenerator-runtime/runtime'
import *  as THREE from 'three'
import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls'
import { FontLoader } from 'three/examples/jsm/loaders/FontLoader'
import { TextGeometry } from 'three/examples/jsm/geometries/TextGeometry'
<<<<<<< Updated upstream
import jsonPath from '../static/gentilis_bold.typeface.txt'
=======
import jsonPath from '../static/troika_regular.typeface.txt'
import { GUI } from 'dat.gui'
import { Vector3 } from 'three'
import { STLExporter } from 'three/examples/jsm/exporters/STLExporter.js';


>>>>>>> Stashed changes


    // SCENE
    const scene = new THREE.Scene();

    // CAMERA
var container = document.getElementById('canvas-div');
document.body.appendChild( container );
var canvReference = document.getElementById("canvas-preview");
document.body.appendChild( canvReference );
    const camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.1, 1000);
    // INIT CAMERA
    camera.position.z = 45;
    camera.position.x = 3;
<<<<<<< Updated upstream
    camera.position.y = 20;
=======
camera.position.y = 20;
    
function resizeCanvasToDisplaySize() {
    const canvas = renderer.domElement;
    
    // look up the size the canvas is being displayed
    const width = canvas.clientWidth;
    const height = canvas.clientHeight;
  
    // adjust displayBuffer size to match
    if (canvas.width !== width || canvas.height !== height) {
      // you must pass false here or three.js sadly fights the browser
      renderer.setSize(width, height, false);
      camera.aspect = width / height;
      camera.updateProjectionMatrix();
  
      // update any render target sizes here
    }
}
  


const params = {
    exportASCII: exportASCII,
    exportBinary: exportBinary
};
let exporter
exporter = new STLExporter();

>>>>>>> Stashed changes

    // RENDERER
    const renderer = new THREE.WebGLRenderer({ antialias: true,  canvas: canvReference});
    renderer.setSize(window.innerWidth, window.innerHeight*0.8);
renderer.shadowMap.enabled = true
    
container.appendChild( renderer.domElement );

    // CONTROLS
    const controls = new OrbitControls(camera, renderer.domElement);
    controls.target = new THREE.Vector3(0, 0, -40);
    controls.update();

    // RESIZE HANDLER
    /*
function onWindowResize() {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight * 0.8);
    }   console.log(document.getElementById('canvas-preview').width)
    
    window.addEventListener('resize', onWindowResize);
*/
    // INIT HEMISPHERE LIGHT
    scene.add(new THREE.AmbientLight(0xffffff, 0.5));

    // SCENE
    scene.background = new THREE.Color(0xffffff);

    // FLOOR
    const plane = new THREE.Mesh(new THREE.PlaneGeometry(200, 200), new THREE.MeshPhongMaterial({ color: 0x0a7d15 }));
    plane.rotation.x = - Math.PI / 2
    plane.receiveShadow = true
    scene.add(plane);

    // POINT LIGHT
    const light1 = new THREE.PointLight(0xff6666, 1, 100);
    light1.castShadow = true;
    light1.shadow.mapSize.width = 4096;
    light1.shadow.mapSize.height = 4096;
    scene.add(light1);

    const light2 = new THREE.PointLight(0x33ff33, 1, 100);
    light2.castShadow = true;
    light2.shadow.mapSize.width = 4096;
    light2.shadow.mapSize.height = 4096;
    scene.add(light2);

    // TEXT
    /*
    const loader = new FontLoader();
    loader.load( 'https://threejs.org/examples/fonts/helvetiker_regular.typeface.json',
                    function(font){
        const textGeometry = new TextGeometry('memicchio', {
            size: 20,
            height: 4,
            font: font,
        })
    const textMaterial = new THREE.MeshNormalMaterial();
    const textMesh = new THREE.Mesh(textGeometry, textMaterial);
    textMesh.position.x = -45;
    textMesh.position.y = 0;
    scene.add(textMesh);      
    });
    */
<<<<<<< Updated upstream
    const loader = new FontLoader();
    loader.load( jsonPath,
                    function(font){
        const textGeometry = new TextGeometry('memicchio', {
            size: 20,
            height: 4,
            font: font,
        })
    const textMaterial = new THREE.MeshNormalMaterial();
    const textMesh = new THREE.Mesh(textGeometry, textMaterial);
    textMesh.position.x = -45;
    textMesh.position.y = 0;
    scene.add(textMesh);      
    });
=======
    const font_loader = new FontLoader();
const textmesh_input = {
        
        text_field: "amogus",
    position_x: 0,
    position_y: 0,
    position_z: 5,
            writable: true
    }
    var box = new THREE.Box3()


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
            text_mesh_pholder.position.x = textmesh_input.position_x;
            text_mesh_pholder.position.y = textmesh_input.position_y;
            text_mesh_pholder.position.y = textmesh_input.position_z;
            text_mesh_pholder.rotation.x = - Math.PI / 2;
            text_mesh_pholder.name = 'text';
            scene.add(text_mesh_pholder);
            box = new THREE.Box3().setFromObject(scene.getObjectByName('text'));
            scene.getObjectByName('text').position.x -= (box.max.x - box.min.x) / 2;
            scene.getObjectByName('text').position.y -= (box.max.y - box.min.y) / 2;
            //scene.getObjectByName('text').position.z -= (box.max.z - box.min.z)/2;
            console.log(box.max.x)
            console.log(scene.getObjectByName('text').position.x)

            function generate_base() {
                var html_text_color = parseInt(document.getElementById('color-base').value)
                const text_color = new THREE.Color(html_text_color)
                const material = new THREE.MeshStandardMaterial({color: text_color});
                const geometry = new THREE.BoxBufferGeometry(box.max.x - box.min.x + 11, box.max.z - box.min.z + 11, box.max.y - box.min.y + 0.03);
                //const material = new THREE.MeshStandardMaterial( {color: 0xFFF89A} );
                const base = new THREE.Mesh(geometry, material);
                base.position.x = 1+(box.max.x - box.min.x)/2//text_mesh_pholder.position.x + box.max.x-  box.min.x;
                base.position.y = 6+(box.max.y - box.min.y) / 2;
                base.position.z = +0.05;
                text_mesh_pholder.rotation.x = - Math.PI / 2;
                base.name = "base"
                scene.getObjectByName('text').add( base );
            }
            generate_base()

            function generate_ring() {
                var html_text_color = parseInt(document.getElementById('color-base').value)
                const text_color = new THREE.Color(html_text_color)
                const material = new THREE.MeshStandardMaterial({color: text_color});
                const geometry = new THREE.TorusGeometry( (box.max.z-box.min.z+6)/2+0.5, 2, 30, 30 );
                //const material = new THREE.MeshStandardMaterial( { color: 0xFFF89A } );
                const ring = new THREE.Mesh( geometry, material );
                ring.position_x = 5
                ring.name = "ring"
                ring.position.z = 0
                ring.position.y = 6+(box.max.y - box.min.y) / 2;
                //ring.scale.z(1)
                //ring.rotation.X(Math.PI / 2)
                //ring.rotateX(-Math.PI / 2)
                scene.getObjectByName('text').add( ring );
            }
            generate_ring()
        });
}
//generate_text();
var input = document.getElementById( 'my-text' );
//input.addEventListener('input', function (event) { generate_text(this.value) })



//console.log(basemesh_input.size)

//var size = box.getSize()




    //Keychain base
    /*
text_mesh_pholder.BufferGeometry.computeBoundingBox();
const size = text_mesh_pholder.BufferGeometry.boundingBox.getSize();
const keychain_base = new THREE.BoxGeometry(size);
textMesh.position.x = -45;
textMesh.position.y = 0;
textMesh.rotation.x = - Math.PI / 2;
    scene.add(keychain_base);
    */
    
    //GUI

/*
    var key_text = ''
    const gui = new GUI()
    const text_folder = gui.addFolder('Text')
text_folder.add(textmesh_input, 'position_x', -100, 100).onChange(function (meme) { scene.getObjectByName('text').position.set(textmesh_input.position_x, textmesh_input.position_y, textmesh_input.position_z) })
text_folder.add(textmesh_input, 'position_y', -100, 100).onChange(function (meme) { scene.getObjectByName('text').position.set(textmesh_input.position_x,textmesh_input.position_y,textmesh_input.position_z) } )
text_folder.add(textmesh_input, 'position_z', -100, 100).onChange(function (meme) { scene.getObjectByName('text').position.set(textmesh_input.position_x,textmesh_input.position_y,textmesh_input.position_z) } )
text_folder.add(textmesh_input, 'text_field').onChange(function (meme) { generate_text() })
    //cubeFolder.add(cube.rotation, 'y', 0, Math.PI * 2)
    //cubeFolder.add(cube.rotation, 'z', 0, Math.PI * 2)
    text_folder.open()
    const cameraFolder = gui.addFolder('Camera')
    cameraFolder.add(camera.position, 'z', 0, 10)
cameraFolder.open()
    

gui.add( params, 'exportASCII' ).name( 'Export STL (ASCII)' );
gui.add( params, 'exportBinary' ).name( 'Export STL (Binary)' );
gui.open();
*/


function exportASCII() {
    //var singleGeometry = new THREE.Geometry();
    //boxMesh.updateMatrix(); // as needed
    //singleGeometry.merge(boxMesh.geometry, boxMesh.matrix);
    const result = exporter.parse(scene.getObjectByName('text')  );
    saveString( result, 'box.stl' );

}

function exportBinary() {
    const result = exporter.parse( scene.getObjectByName('text'), { binary: true } );
    saveArrayBuffer( result, 'keychain.stl' );

}
    
    //Bounding Box
    //console.log( box.min, box.max, box.getSize() );

    //Interaction
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



    
>>>>>>> Stashed changes
    // ANIMATE
function animate() {
    resizeCanvasToDisplaySize();
        const now = Date.now() / 1000;
        light1.position.y = 15;
        //light1.position.x = Math.cos(now) * 20;
        //light1.position.z = Math.sin(now) * 20;

        light2.position.y = 15;
        //light2.position.x = Math.sin(now) * 20;
        //light2.position.z = Math.cos(now) * 20;

        renderer.render(scene, camera);
        requestAnimationFrame(animate);
    }
    document.body.appendChild(renderer.domElement);
<<<<<<< Updated upstream
    animate();
=======
    //animate();
>>>>>>> Stashed changes
