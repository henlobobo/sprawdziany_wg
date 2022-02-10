let inputy = document.querySelectorAll("input");
let divy = document.querySelectorAll("div");
let input = inputy[0];
let div = divy[0];
function Click(e)
{
    div.innerText = "Został wciśnięty klawisz: " + (String.fromCharCode(e.keyCode));
}
input.addEventListener("keypress", Click);