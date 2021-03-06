var arr = [["D"], ["U","M"], ["B", "W", "A"], ["Y", "S", "I", "D"], ["U", "J", "I", "A", "N"]]

var deret = arr.length
  arr.forEach(function(elemenX, indexX) {
    var teks = " "
      for (var i = deret - indexX; i>0; i--) {
        teks = teks + ' '
      }
      arr[indexX].forEach(function(elemenY, indexY) {
        teks = teks + arr[indexX][indexY] + " "
      })
        console.log(teks)
    })
    