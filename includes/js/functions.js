function isItCaturday() {
  var d = new Date();
  if (d.getDay() == 6) { // Caturday
    return true;
  }
  return false;
}