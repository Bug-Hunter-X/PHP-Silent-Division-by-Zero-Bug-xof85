function foo(a, b) {
  if ($b === 0) {
    throw new 
Exception('Division by zero');
  }
  return $a / $b; 
}

try {
  $result = foo(10, 0);
  echo $result;
} catch (
Exception $e) {
  echo "Error: " . $e->getMessage();
}
//Alternatively, handle the division by zero case
function foo(a, b) {
    if ($b === 0) {
        return 0; // Or another appropriate value
    }
    return $a / $b; 
}
$result = foo(10, 0); // Returns 0 instead of error
echo $result; 