let checkedEl = [];
let setExetras = () => {
    document.getElementById('extras').value = checkedEl;
}
let checkedIf = (e) => {
    if (checkedEl.includes(e.target.value)) {
        checkedEl.splice(checkedEl.indexOf(e.target.value), 1)
    } else {
        checkedEl.push(e.target.value)
    }
    setExetras();
    
}
