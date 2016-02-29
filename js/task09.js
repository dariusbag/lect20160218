function drawRectangle(x1, y1, x2, y2, x3, y3, x4, y4){
    var coords = [[x1, y1], [x2, y2], [x3, y3], [x4, y4]];

    var c = document.getElementById("drobe");
    var ctx = c.getContext("2d");
    ctx.beginPath();

    ctx.moveTo(coords[0][0], coords[0][1]);
    ctx.lineTo(coords[1][0], coords[1][1]);
    ctx.lineTo(coords[2][0], coords[2][1]);
    ctx.lineTo(coords[3][0], coords[3][1]);
    ctx.lineTo(coords[0][0], coords[0][1]);

    ctx.strokeStyle = "#000080";
    ctx.stroke();
}