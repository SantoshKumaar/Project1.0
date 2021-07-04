<!DOCTYPE html>
<html>
<title>Celsius to Fahrenheit and vicecersa </title>
<body>

<h2> Program to convert temp from Celcius to Fahrenheit
    and Vice Versa.
  </h2>
<p>Type a value in the Celsius field to convert the value to Fahrenheit:</p>
<p>Type a value in the Fahrenheit field to convert the value to Celsius:</p>

<p>
  <label>Celsius</label>
  <input id="inputCelsius" type="number" placeholder="Celsius" oninput="temperatureConverter(this.value)" onchange="temperatureConverter(this.value)">
</p>
<p>Fahrenheit: <span id="outputFahrenheit"></span></p>
<p>
    <label>Fahrenheit</label>
    <input id="inputFahrenheit" type="number" placeholder="Fahrenheit" oninput="temperatureConverter(this.value)" onchange="temperatureConverter(this.value)">
  </p>
  <p>Celcius: <span id="outputCelcius"></span></p>
<script>
function temperatureConverter(valNum) {
  valNum = parseFloat(valNum);
  document.getElementById("outputFahrenheit").innerHTML=(valNum*1.8)+32;
}
function temperatureConverter(valNum) {
  valNum = parseFloat(valNum);
  document.getElementById("outputCelcius").innerHTML=(valNum-32)/1.8;
}
</script>

</body>
</html>