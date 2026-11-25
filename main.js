import * as THREE from "https://esm.sh/three@0.180.0";

const viewport = document.getElementsByClassName("viewport")[0];

const scene = new THREE.Scene();

const camera = new THREE.PerspectiveCamera(30, viewport.clientWidth / viewport.clientHeight);
camera.position.set(0, 1, 5);
camera.lookAt(0,0,0)

const light = new THREE.AmbientLight( 0x404040, 5);
const directionalLight = new THREE.DirectionalLight( 0xffffff, 3);
directionalLight.position.set(0, 5, 5);

const geometry = new THREE.BoxGeometry( 1, 1, 1 );
const material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
const mesh = new THREE.Mesh( geometry, material );

scene.add(mesh, camera, light, directionalLight);

const renderer = new THREE.WebGLRenderer({ 
    alpha: true 
});

renderer.setSize(viewport.clientWidth, viewport.clientHeight);
viewport.appendChild(renderer.domElement);

function animate() {
    requestAnimationFrame(animate);
    renderer.render(scene, camera);
}
animate();