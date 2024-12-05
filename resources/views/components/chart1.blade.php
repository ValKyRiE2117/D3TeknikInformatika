<div class="max-w-sm w-full bg-white rounded-lg shadow-md  p-4 md:p-6">
    <div class="w-full">
        <div class="text-center">
            <h5 class="text-xl font-bold text-gray-900 ">Diagram Nilai Mahasiswa</h5>
        </div>
        <div class="mt-2">
            <canvas id="pieChart"></canvas>
        </div>
        <hr class="my-4">
        <div class="text-center">
            <p class="text-sm font-medium text-gray-900 ">Jumlah Mahasiswa : <span class="font-bold">{{$mahasiswaCount}}</span></p>
        </div>
    </div>  
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('pieChart').getContext('2d');
  const pieChart = new Chart(ctx, {
    type: 'pie', // Set chart type to 'pie'
    data: {
      labels: ['A', 'AB', 'B', 'BC', 'C', 'D', 'E'], // Labels for your pie chart segments
      datasets: [{
        label: 'Jumlah Mahasiswa',
        data: [{{$mahasiswaCount}},2, 3,5,1,1,1], // Data values (proportions for each segment)
        backgroundColor: [
          '#2a9d77',  
          '#219ebc', 
          '#8ecae6',  
          '#e9c46a', 
          '#f4a261',  
          '#e76f51',  
          '#FF5E80',  
        ],
        
      }]
    },
    options: {
      responsive: true, // Makes the chart responsive
      plugins: {
        legend: {
          display: true, // Show the legend
          position: 'top' // Legend position
        }
      }
    }
  });
  </script>