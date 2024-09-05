function doTest() {
  fetch('/test', { method: "POST"}).then(r => r.json().then(json => console.log(json)));
}

document.getElementById('test').onclick = () => {
  doTest();
}