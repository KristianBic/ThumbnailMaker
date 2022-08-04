//print as object
// console.log({
//     topVal
// });




let currentTextNumber = 2;


$(".text-Input").on('input', event => {
    changeText(event);
})


function changeText(event) {
    const currentInput = event.target;
    const inputData = currentInput.dataset.text;
    const currentTextOnCanvas = $("p[data-text='" + inputData + "']");

    currentTextOnCanvas.text(currentInput.value);
}

function addNewTextLine() {
    currentTextNumber++;

    const inputLabel = document.createElement('p');
    const input = document.createElement('input');
    const textOnCanvas = document.createElement('p');

    input.setAttribute('class', 'text-Input');
    input.setAttribute('type', 'text');
    input.setAttribute('placeholder', 'Enter Text');
    input.setAttribute('data-text', `Text line ${currentTextNumber}`);
    textOnCanvas.setAttribute('data-text', `Text line ${currentTextNumber}`);
    textOnCanvas.setAttribute('data-movable', `true`);
    textOnCanvas.setAttribute('class', 'text-canva');

    inputLabel.innerHTML = input.dataset.text;
    textOnCanvas.innerHTML = `Text ${currentTextNumber}`;

    input.addEventListener('input', changeText);
    textOnCanvas.addEventListener('mousedown', movingElements);

    $("#text_inputs").append(inputLabel);
    $("#text_inputs").append(input);
    $('.canva').append(textOnCanvas);
}

$('#btn_Create_Image').on("click", () => {
    const can = document.getElementById('canvas_id');
    html2canvas(can).then(canvas => {
        const image = canvas.toDataURL("image/jpg");
        const newData = image.replace(/^data:image\/jpg/, "data:application/octet-stream");
        $("#download").attr("download", "image.jpg").attr("href", newData);
    });
});


$('*[data-movable="true"]').on("mousedown", (event) => {
    movingElements(event);
});


//check if the coordinates are within canvas. If not, then dont't place them inside
function onDrag({
    movementX,
    movementY,
    target
}) {
    let getStyle = window.getComputedStyle(target);
    let leftVal = parseInt(getStyle.left);
    let topVal = parseInt(getStyle.top);

    target.style.left = `${leftVal + movementX}px`;
    target.style.top = `${topVal + movementY}px`;
}

function movingElements(event) {
    const element = event.target;
    element.style.position = "absolute";
    element.classList.add("active");
    element.addEventListener("mousemove", onDrag);

    //instead of document, we can use 'element', however there is a bug where when we "mouseUp" outside the 'element', listener mouseup doesn't process
    document.addEventListener("mouseup", function mouseUpList() {
        element.classList.remove("active");
        element.removeEventListener("mousemove", onDrag);
        document.removeEventListener("mouseup", mouseUpList);
    });
};