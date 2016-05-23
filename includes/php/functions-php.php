<?php  
function generateCaturdayText($fileName, $defaultText) {
  $fileName = 'includes/txt/' . $fileName;
  if(file_exists($fileName)) {
    $f_contents = file($fileName);
    $f_count = count($f_contents);
    if ($f_count < 1) { // no entries
      return $defaultText;
    }
    $line = $f_contents[rand(0, count($f_contents) - 1)];
    $line = rtrim($line, "\n"); //@@ TODO might need to account for linebreaks in other OS's
    return $line;
  } else {
    return $defaultText;
  }
}
?>