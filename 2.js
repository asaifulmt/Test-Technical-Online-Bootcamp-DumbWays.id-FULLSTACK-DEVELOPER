function dataArray(arr) {
  for (var i = 0; i < (arr.length / 2); i++) {
      var el = arr[i]
      arr[i] = arr[arr.length - 1 - i]
      arr[arr.length - 1 - i] = el
  }
  console.log (arr)
}

var elemenN = [19,22,3,28,26,17,18,4,28,0]

dataArray(elemenN)