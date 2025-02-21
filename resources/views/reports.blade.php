<!-- resources/views/reports.blade.php -->
<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
          Quartalsberichte
      </h2>
  </x-slot>
  
  <div class="py-12 bg-gray-50 dark:bg-gray-900">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <!-- Hero Section -->
          <div class="bg-gradient-to-r from-blue-500 to-purple-600 dark:from-blue-700 dark:to-purple-700 shadow-2xl rounded-lg p-10 mb-10 text-center">
              <h1 class="text-5xl font-bold text-white">Aktuelle Quartalsberichte</h1>
              <p class="mt-4 text-xl text-white opacity-90">
                  Ein Überblick über die neuesten Ergebnisse und KPIs Ihres Unternehmens.
              </p>
          </div>
  
          <!-- Tab Container using Alpine.js -->
          <div x-data="{ tab: 'q1' }" class="bg-white dark:bg-gray-800 shadow-xl rounded-lg p-8">
              <!-- Tab Headers with Emoji Indicators -->
              <div class="flex justify-around border-b border-gray-300 dark:border-gray-700 pb-4">
                  <button @click="tab = 'q1'" 
                          :class="tab === 'q1' ? 'border-b-4 border-blue-500 text-blue-500' : 'text-gray-500'"
                          class="py-2 px-4 focus:outline-none flex items-center">
                      Q1 <span class="ml-1 text-xl">✅</span>
                  </button>
                  <button @click="tab = 'q2'" 
                          :class="tab === 'q2' ? 'border-b-4 border-blue-500 text-blue-500' : 'text-gray-500'"
                          class="py-2 px-4 focus:outline-none flex items-center">
                      Q2 <span class="ml-1 text-xl">❌</span>
                  </button>
                  <button @click="tab = 'q3'" 
                          :class="tab === 'q3' ? 'border-b-4 border-blue-500 text-blue-500' : 'text-gray-500'"
                          class="py-2 px-4 focus:outline-none flex items-center">
                      Q3 <span class="ml-1 text-xl">❌</span>
                  </button>
                  <button @click="tab = 'q4'" 
                          :class="tab === 'q4' ? 'border-b-4 border-blue-500 text-blue-500' : 'text-gray-500'"
                          class="py-2 px-4 focus:outline-none flex items-center">
                      Q4 <span class="ml-1 text-xl">❌</span>
                  </button>
              </div>
  
              <!-- Tab Content -->
              <div class="mt-6">
                  <!-- Q1 Tab with Multiple Charts -->
                  <div x-show="tab === 'q1'" x-cloak>
                      <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-6">
                          <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4">Bericht Q1</h3>
                          <p class="text-gray-700 dark:text-gray-300 mb-6">
                              Hier finden Sie den Bericht für das erste Quartal, inklusive KPIs und Analysen.
                          </p>
                          <!-- Chart Grid -->
                          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                              <!-- Umsatz Chart -->
                              <div class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow">
                                  <h4 class="text-lg font-bold text-gray-800 dark:text-gray-200 mb-2">Umsatz</h4>
                                  <canvas id="chartUmsatz" height="150"></canvas>
                              </div>
                              <!-- Gewinn Chart -->
                              <div class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow">
                                  <h4 class="text-lg font-bold text-gray-800 dark:text-gray-200 mb-2">Gewinn</h4>
                                  <canvas id="chartGewinn" height="150"></canvas>
                              </div>
                              <!-- Aufträge Chart -->
                              <div class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow">
                                  <h4 class="text-lg font-bold text-gray-800 dark:text-gray-200 mb-2">Aufträge</h4>
                                  <canvas id="chartAuftraege" height="150"></canvas>
                              </div>
                              <!-- Kunden Chart -->
                              <div class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow">
                                  <h4 class="text-lg font-bold text-gray-800 dark:text-gray-200 mb-2">Kunden</h4>
                                  <canvas id="chartKunden" height="150"></canvas>
                              </div>
                              <!-- Mitarbeiter Chart -->
                              <div class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow md:col-span-2">
                                  <h4 class="text-lg font-bold text-gray-800 dark:text-gray-200 mb-2">Mitarbeiter</h4>
                                  <canvas id="chartMitarbeiter" height="150"></canvas>
                              </div>
                          </div>
                      </div>
                  </div>
  
                  <!-- Q2, Q3, Q4 Tabs (Placeholder content) -->
                  <div x-show="tab === 'q2'" x-cloak>
                      <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-6">
                          <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200">Bericht Q2</h3>
                          <p class="mt-2 text-gray-700 dark:text-gray-300">Der Bericht für Q2 ist noch in Bearbeitung.</p>
                      </div>
                  </div>
                  <div x-show="tab === 'q3'" x-cloak>
                      <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-6">
                          <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200">Bericht Q3</h3>
                          <p class="mt-2 text-gray-700 dark:text-gray-300">Der Bericht für Q3 ist noch in Bearbeitung.</p>
                      </div>
                  </div>
                  <div x-show="tab === 'q4'" x-cloak>
                      <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-6">
                          <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200">Bericht Q4</h3>
                          <p class="mt-2 text-gray-700 dark:text-gray-300">Der Bericht für Q4 ist noch in Bearbeitung.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
  <!-- Chart.js Library from CDN -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
      window.addEventListener('load', function() {
          // Umsatz Chart (Bar Chart)
          var ctxUmsatz = document.getElementById('chartUmsatz').getContext('2d');
          new Chart(ctxUmsatz, {
              type: 'bar',
              data: {
                  labels: ['Januar', 'Februar', 'März'],
                  datasets: [{
                      label: 'Umsatz in €',
                      data: [120000, 150000, 100000],
                      backgroundColor: 'rgba(54, 162, 235, 0.5)',
                      borderColor: 'rgba(54, 162, 235, 1)',
                      borderWidth: 1
                  }]
              },
              options: {
                  responsive: true,
                  scales: {
                      y: {
                          beginAtZero: true,
                          ticks: {
                              callback: function(value) {
                                  return '€' + value;
                              }
                          }
                      }
                  }
              }
          });
  
          // Gewinn Chart (Line Chart)
          var ctxGewinn = document.getElementById('chartGewinn').getContext('2d');
          new Chart(ctxGewinn, {
              type: 'line',
              data: {
                  labels: ['Januar', 'Februar', 'März'],
                  datasets: [{
                      label: 'Gewinn in €',
                      data: [30000, 40000, 25000],
                      backgroundColor: 'rgba(75, 192, 192, 0.5)',
                      borderColor: 'rgba(75, 192, 192, 1)',
                      borderWidth: 2,
                      fill: true
                  }]
              },
              options: {
                  responsive: true,
                  scales: {
                      y: {
                          beginAtZero: true,
                          ticks: {
                              callback: function(value) {
                                  return '€' + value;
                              }
                          }
                      }
                  }
              }
          });
  
          // Aufträge Chart (Doughnut Chart)
          var ctxAuftraege = document.getElementById('chartAuftraege').getContext('2d');
          new Chart(ctxAuftraege, {
              type: 'doughnut',
              data: {
                  labels: ['Abgeschlossen', 'In Bearbeitung', 'Neu'],
                  datasets: [{
                      label: 'Aufträge',
                      data: [80, 30, 10],
                      backgroundColor: [
                          'rgba(255, 99, 132, 0.6)',
                          'rgba(255, 205, 86, 0.6)',
                          'rgba(54, 162, 235, 0.6)'
                      ],
                      hoverOffset: 4
                  }]
              },
              options: {
                  responsive: true
              }
          });
  
          // Kunden Chart (Pie Chart)
          var ctxKunden = document.getElementById('chartKunden').getContext('2d');
          new Chart(ctxKunden, {
              type: 'pie',
              data: {
                  labels: ['Neu', 'Bestandskunden'],
                  datasets: [{
                      label: 'Kunden',
                      data: [150, 850],
                      backgroundColor: [
                          'rgba(153, 102, 255, 0.6)',
                          'rgba(201, 203, 207, 0.6)'
                      ]
                  }]
              },
              options: {
                  responsive: true
              }
          });
  
          // Mitarbeiter Chart (Radar Chart)
          var ctxMitarbeiter = document.getElementById('chartMitarbeiter').getContext('2d');
          new Chart(ctxMitarbeiter, {
              type: 'radar',
              data: {
                  labels: ['IT', 'Support', 'Vertrieb', 'Marketing', 'HR'],
                  datasets: [{
                      label: 'Mitarbeiterzahl',
                      data: [20, 15, 10, 8, 5],
                      backgroundColor: 'rgba(255, 159, 64, 0.5)',
                      borderColor: 'rgba(255, 159, 64, 1)',
                      pointBackgroundColor: 'rgba(255, 159, 64, 1)'
                  }]
              },
              options: {
                  responsive: true,
                  scales: {
                      r: {
                          beginAtZero: true
                      }
                  }
              }
          });
      });
  </script>
</x-app-layout>
