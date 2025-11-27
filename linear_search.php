<?php

/**
 * Performs a linear search on an array.
 * 
 * @param array $array  The array to search through
 * @param mixed $target The value to find
 * @return int          Returns the index if found, or -1 if not found
 */
function linearSearch($array, $target) {
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $target) {
            return $i;
        }
    }
    return -1;
}

// Array with 10+ values
$items = [123, 7, 25, 30, 5, 88, 42, 19, 25, 60];

$resultMessage = "";

if (isset($_POST['search'])) {
    $target = $_POST['value'];
    $index  = linearSearch($items, $target);

    if ($index != -1) {
        $resultMessage = "<div class='result success'><strong>$target</strong> found at index <strong>$index</strong>.</div>";
    } else {
        $resultMessage = "<div class='result error'><strong>$target</strong> not found in the array.</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Linear Search (PHP)</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap">

<style>
:root {
  --soft-pink:#F8C8DC;
  --lavender:#C8A2C8;
  --cream:#FFF8E7;
  --charcoal:#3A3A3A;
  --rose:#E75480;
  --white:#ffffff;
}

* {
  box-sizing: border-box;
}

body {
  margin:0;
  font-family:"Poppins",sans-serif;
  background:linear-gradient(135deg, var(--soft-pink), var(--lavender));
  min-height:100vh;
  display:flex;
  justify-content:center;
  align-items:center;
}

.card {
  background:var(--white);
  width:480px;
  max-width:90%;
  padding:30px 32px 26px;
  border-radius:22px;
  text-align:center;
  box-shadow:0 18px 45px rgba(0,0,0,0.18);
}

h2 {
  margin:0 0 14px;
  color:var(--charcoal);
  font-size:1.8rem;
}

.form-group {
  text-align:left;
  margin-bottom:16px;
}

label {
  display:block;
  margin-bottom:6px;
  color:#555;
  font-size:.9rem;
}

input[type="text"] {
  width:100%;
  padding:12px 14px;
  border-radius:12px;
  border:1px solid #ccc;
  font-size:.95rem;
  outline:none;
}

input[type="text"]:focus {
  border-color:var(--lavender);
  box-shadow:0 0 0 2px rgba(200,162,200,0.25);
}

button {
  width:100%;
  padding:12px 14px;
  margin-top:8px;
  background:var(--lavender);
  color:var(--white);
  border:none;
  border-radius:999px;
  font-size:.95rem;
  font-weight:500;
  cursor:pointer;
  transition:.25s;
}

button:hover {
  background:#b58cb5;
}

.result {
  margin-top:16px;
  padding:12px;
  border-radius:14px;
  font-size:.9rem;
}

.success {
  background:#e6ffe6;
  color:#1f7a1f;
}

.error {
  background:#ffe5e5;
  color:#a30000;
}
</style>
</head>

<body>
  <div class="card">
    <h2>Linear Search</h2>

    <form method="POST">
      <div class="form-group">
        <label>Enter value to search:</label>
        <input type="text" name="value" required>
      </div>
      <button type="submit" name="search">Search</button>
    </form>

    <?= $resultMessage ?>
  </div>
</body>
</html>
