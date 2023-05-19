<div>   <canvas id="polarChart" ></canvas></div>

<div><canvas id="bubbleChart" ></canvas>
</div>  



<script src="https://cdn.jsdelivr.net/npm/chart.js">


// Obtén los datos de la tabla de productos
var productos = {!! json_encode($data_productos) !!};

// Obtén los valores necesarios para los gráficos
var marcas = productos.map(producto => producto.Marca);
var cantidades = productos.map(producto => producto.Cantidad);
var precios = productos.map(producto => producto.Precio);

// Crea el gráfico polar de columnas
new Chart(document.getElementById("polarChart"), {
type: "polarArea",
data: {
labels: marcas,
datasets: [
{
label: "Cantidad",
data: cantidades,
backgroundColor: "rgba(75, 192, 192, 0.5)",
borderColor: "rgba(75, 192, 192, 1)",
borderWidth: 1,
},
],
},
options: {
responsive: true,
maintainAspectRatio: false,
},
});

// Crea el gráfico de burbujas
new Chart(document.getElementById("bubbleChart"), {
type: "bubble",
data: {
labels: marcas,
datasets: [
{
label: "Precio",
data: precios.map(precio => ({
x: Math.random() * 10, // Coordenada x aleatoria para las burbujas
y: Math.random() * 100, // Coordenada y aleatoria para las burbujas
r: precio, // Radio de la burbuja basado en el precio
})),
backgroundColor: "rgba(255, 99, 132, 0.5)",
borderColor: "rgba(255, 99, 132, 1)",
borderWidth: 1,
},
],
},
options: {
responsive: true,
maintainAspectRatio: false,
scales: {
y: {
beginAtZero: true,
},
},
},
});


</script>


<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
