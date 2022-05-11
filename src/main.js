
import 'regenerator-runtime/runtime'
import *  as THREE from 'three'
import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls'
import { FontLoader } from 'three/examples/jsm/loaders/FontLoader'
import { TextGeometry } from 'three/examples/jsm/geometries/TextGeometry'
import jsonPath from '../static/gentilis_bold.typeface.txt'
import { GUI } from 'dat.gui'
import { Vector3 } from 'three'
import { STLExporter } from 'three/examples/jsm/exporters/STLExporter.js';




    // SCENE
    const scene = new THREE.Scene();

    // CAMERA
    const camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.1, 1000);
    // INIT CAMERA
    camera.position.z = 45;
    camera.position.x = 3;
camera.position.y = 20;

const params = {
    exportASCII: exportASCII,
    exportBinary: exportBinary
};
let exporter
exporter = new STLExporter();


    // RENDERER
    const renderer = new THREE.WebGLRenderer({ antialias: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.shadowMap.enabled = true

    // CONTROLS
    const controls = new OrbitControls(camera, renderer.domElement);
    controls.target = new THREE.Vector3(0, 0, -40);
    controls.update();

    // RESIZE HAMDLER
    function onWindowResize() {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    }
    window.addEventListener('resize', onWindowResize);

    // INIT HEMISPHERE LIGHT
    scene.add(new THREE.AmbientLight(0xffffff, 0.5));

    // SCENE
    scene.background = new THREE.Color(0xffffff);

    // FLOOR
    const texture_floor = new THREE.TextureLoader().load( 'https://i1.sndcdn.com/artworks-PctSj7qJOXILUR9T-QTlSIA-t500x500.jpg' ); //Texture Loading
    texture_floor.wrapS = THREE.RepeatWrapping; //Wrapping method X
    texture_floor.wrapT = THREE.RepeatWrapping; //Wrapping method Y
    texture_floor.repeat.set( 4, 4 );   //Number of times it gets repeated on X,Y
    const material_floor = new THREE.MeshBasicMaterial({ map: texture_floor }); //Creation of material with texture_floor as texture
    const plane = new THREE.Mesh(new THREE.PlaneGeometry(200, 200), material_floor);    //Creation of mesh with matieral_floor as material
    plane.rotation.x = - Math.PI / 2    //Rotation on X axis
    plane.receiveShadow = true  //Does it recive shadows?
    scene.add(plane);   //Add plane to scene

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
    const font_loader = new FontLoader();
    font_loader.load( 'https://threejs.org/examples/fonts/helvetiker_regular.typeface.json',
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
    const font_loader = new FontLoader();
const textmesh_input = {
        
        text_field: "amogus",
    position_x: -45,
    position_y: 0,
    position_z: 0,
            writable: true
    }
    var box = new THREE.Box3()

function generate_text(){
    var text_mesh_pholder = new THREE.Mesh;
    font_loader.load(jsonPath,
        function (font) {
            const textGeometry = new TextGeometry(textmesh_input.text_field, {
                size: 20,
                height: 4,
                font: font,
            })
            const textMaterial = new THREE.MeshNormalMaterial();
            text_mesh_pholder = new THREE.Mesh(textGeometry, textMaterial);
            text_mesh_pholder.position.x = textmesh_input.position_x;
            text_mesh_pholder.position.y = textmesh_input.position_y;
            text_mesh_pholder.rotation.x = - Math.PI / 2;
            text_mesh_pholder.name = 'text';
            scene.add(text_mesh_pholder);
            box = new THREE.Box3().setFromObject(scene.getObjectByName("text"));
        });
}
generate_text();

/*
var size = box.getSize()
const basemesh_input = {
    size_x: box.max.x - box.min.x,
    size_y: box.max.y - box.min.y,
    size_z: box.max.z - box.min.z
}


function generate_base() {
    const geometry = new THREE.BoxBufferGeometry(basemesh_input.size_x,1,1);
    const material = new THREE.MeshBasicMaterial( {color: 0x00ff00} );
    const cube = new THREE.Mesh(geometry, material);
    scene.add( cube );
}
generate_base()

*/
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


    var key_text = ''
    const gui = new GUI()
    const text_folder = gui.addFolder('Text')
text_folder.add(textmesh_input, 'position_x', -100, 100).onChange(function (meme) { scene.getObjectByName('text').position.set(textmesh_input.position_x, textmesh_input.position_y, textmesh_input.position_z) })
text_folder.add(textmesh_input, 'position_y', -100, 100).onChange(function (meme) { scene.getObjectByName('text').position.set(textmesh_input.position_x,textmesh_input.position_y,textmesh_input.position_z) } )
text_folder.add(textmesh_input, 'position_z', -100, 100).onChange(function (meme) { scene.getObjectByName('text').position.set(textmesh_input.position_x,textmesh_input.position_y,textmesh_input.position_z) } )
text_folder.add(textmesh_input, 'text_field').onChange(function (meme) { scene.remove(scene.getObjectByName('text')), generate_text() })
    //cubeFolder.add(cube.rotation, 'y', 0, Math.PI * 2)
    //cubeFolder.add(cube.rotation, 'z', 0, Math.PI * 2)
    text_folder.open()
    const cameraFolder = gui.addFolder('Camera')
    cameraFolder.add(camera.position, 'z', 0, 10)
cameraFolder.open()
    

gui.add( params, 'exportASCII' ).name( 'Export STL (ASCII)' );
gui.add( params, 'exportBinary' ).name( 'Export STL (Binary)' );
gui.open();


function exportASCII() {
    //var singleGeometry = new THREE.Geometry();
    //boxMesh.updateMatrix(); // as needed
    //singleGeometry.merge(boxMesh.geometry, boxMesh.matrix);
    const result = exporter.parse(scene.getObjectByName('text')  );
    saveString( result, 'box.stl' );

}

function exportBinary() {
    const result = exporter.parse( scene.getObjectByName('text'), { binary: true } );
    saveArrayBuffer( result, 'box.stl' );

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



    
    // ANIMATE
    function animate() {
        const now = Date.now() / 1000;
        light1.position.y = 15;
        light1.position.x = Math.cos(now) * 20;
        light1.position.z = Math.sin(now) * 20;

        light2.position.y = 15;
        light2.position.x = Math.sin(now) * 20;
        light2.position.z = Math.cos(now) * 20;

        renderer.render(scene, camera);
        requestAnimationFrame(animate);
    }
    requestAnimationFrame(animate);
    document.body.appendChild(renderer.domElement);
    //animate();
