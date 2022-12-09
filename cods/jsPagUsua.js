
const menu = document.querySelector("#btnMenu")
menu.addEventListener("click", () => {
	const header = document.querySelector(".menuUsuario")
	header.classList.toggle("active")
})

const btnMateriais = document.querySelector("#btnMateriais")
btnMateriais.addEventListener("click", () => {
	const materias = document.querySelector("#materiais")
	materias.classList.toggle("active")
})