/*************RESUME */
function doCapture() {
			
    window.scrollTo(0,0);
    html2canvas(document.getElementById('resume'),{scale:2},{useCORS:true},{width: 794},{height:1123}).then(function(canvas) {
      document.body.appendChild(canvas);
      
      var wid;
    var hgt;
    var img = canvas.toDataURL("image/jpg", wid = canvas.width, hgt = canvas.height);
    var hratio = hgt/wid
    var doc = new jsPDF('p','pt','a4');
    var width = doc.internal.pageSize.width;    
    var height = width * hratio;
    console.log(height);
    doc.addImage(img,'jpg',0,0, width, height);
    doc.save('Test.pdf');

    });
}