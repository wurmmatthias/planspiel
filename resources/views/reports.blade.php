<!-- resources/views/reports.blade.php -->
<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
          Quartalsberichte
      </h2>
  </x-slot>

  @php
      $currentYear = now()->year;
      // Define an array of quarters for convenience.
      $quarters = ['Q1', 'Q2', 'Q3', 'Q4'];
  @endphp

  <div class="py-12 bg-gray-50 dark:bg-gray-900">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <!-- Hero Section -->
          <div class="bg-gradient-to-r from-blue-500 to-purple-600 dark:from-blue-700 dark:to-purple-700 shadow-2xl rounded-lg p-10 mb-10 text-center">
              <h1 class="text-5xl font-bold text-white">Aktuelle Quartalsberichte</h1>
              <p class="mt-4 text-xl text-white opacity-90">
                  Ein Überblick über die neuesten Ergebnisse und Kennzahlen Ihres Unternehmens.
              </p>
          </div>

          <!-- Tab Container using Alpine.js -->
          <div x-data="{ tab: 'Q1' }" class="bg-white dark:bg-gray-800 shadow-xl rounded-lg p-8">
              <!-- Tab Headers with Emoji Indicators -->
              <div class="flex justify-around border-b border-gray-300 dark:border-gray-700 pb-4">
                  @foreach($quarters as $index => $quarter)
                      @php
                          // For Q1-Q3, if data for the current quarter and the next quarter exist, we show a checkmark.
                          // For Q4, we just show a neutral info indicator if data exists.
                          $nextQuarter = ($index < count($quarters) - 1) ? $quarters[$index + 1] : null;
                          $kpiCurrent = Auth::user()->company->kpis()->where('year', $currentYear)->where('quarter', $quarter)->first();
                          $kpiNext = $nextQuarter
                              ? Auth::user()->company->kpis()->where('year', $currentYear)->where('quarter', $nextQuarter)->first()
                              : null;
                          if($nextQuarter) {
                              $emoji = ($kpiCurrent && $kpiNext) ? '✅' : '❌';
                          } else {
                              $emoji = ($kpiCurrent) ? 'ℹ️' : '❌';
                          }
                      @endphp
                      <button @click="tab = '{{ $quarter }}'"
                              :class="tab === '{{ $quarter }}' ? 'border-b-4 border-blue-500 text-blue-500' : 'text-gray-500'"
                              class="py-2 px-4 focus:outline-none flex items-center">
                          {{ $quarter }} <span class="ml-1 text-xl">{{ $emoji }}</span>
                      </button>
                  @endforeach
              </div>

              <!-- Tab Content -->
              <div class="mt-6">
                  @foreach($quarters as $index => $quarter)
                      @php
                          $nextQuarter = ($index < count($quarters) - 1) ? $quarters[$index + 1] : null;
                          $kpiCurrent = Auth::user()->company->kpis()->where('year', $currentYear)->where('quarter', $quarter)->first();
                          $kpiNext = $nextQuarter
                              ? Auth::user()->company->kpis()->where('year', $currentYear)->where('quarter', $nextQuarter)->first()
                              : null;
                      @endphp
                      <div x-show="tab === '{{ $quarter }}'" x-cloak>
                          @if($kpiCurrent)
                              <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-6">
                                  <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4">Bericht {{ $quarter }}</h3>
                                  @if($nextQuarter && $kpiNext)
                                      <p class="text-gray-700 dark:text-gray-300 mb-6">
                                          Der {{ $quarter }}-Wert wird mit den Daten von {{ $nextQuarter }} verglichen:
                                      </p>

                                      @php
                                          $kpiData = [
                                              'umsatz'      => 'Umsatz',
                                              'gewinn'      => 'Gewinn',
                                              'kunden'      => 'Kunden',
                                              'auftraege'   => 'Aufträge',
                                              'angestellte' => 'Angestellte'
                                          ];
                                      @endphp

                                      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                                          @foreach($kpiData as $key => $label)
                                              @php
                                                  $valueCurrent = $kpiCurrent->$key ?? 0;
                                                  $valueNext = $kpiNext->$key ?? 0;
                                                  $change = $valueNext - $valueCurrent;
                                                  if($valueCurrent > 0) {
                                                      $percentage = ($change / $valueCurrent) * 100;
                                                      $percentageText = number_format($percentage, 2) . '%';
                                                  } else {
                                                      // If the current value is zero and the next value > 0, label as "neu"
                                                      $percentageText = ($valueNext > 0) ? 'Neu' : '0%';
                                                      $percentage = 0;
                                                  }
                                                  $barColor = ($change >= 0) ? 'bg-green-600' : 'bg-red-600';
                                                  $barWidth = ($valueCurrent > 0) ? min(abs($percentage), 100) : 100;
                                              @endphp

                                              <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-4">
                                                  <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $label }}</h4>
                                                  @if($valueCurrent == 0 && $valueNext > 0)
                                                      <p class="mt-2 text-gray-700 dark:text-gray-300">
                                                          {{ $label }} wurde neu erfasst und beträgt
                                                          <span class="font-bold">
                                                              @if(in_array($key, ['umsatz','gewinn']))
                                                                  €{{ number_format($valueNext, 2, ',', '.') }}
                                                              @else
                                                                  {{ $valueNext }}
                                                              @endif
                                                          </span>.
                                                      </p>
                                                  @else
                                                      <p class="mt-2 text-gray-700 dark:text-gray-300">
                                                          Der {{ $label }} hat sich von
                                                          <span class="font-bold">
                                                              @if(in_array($key, ['umsatz','gewinn']))
                                                                  €{{ number_format($valueCurrent, 2, ',', '.') }}
                                                              @else
                                                                  {{ $valueCurrent }}
                                                              @endif
                                                          </span>
                                                          auf
                                                          <span class="font-bold">
                                                              @if(in_array($key, ['umsatz','gewinn']))
                                                                  €{{ number_format($valueNext, 2, ',', '.') }}
                                                              @else
                                                                  {{ $valueNext }}
                                                              @endif
                                                          </span> verändert.
                                                      </p>
                                                      <p class="mt-1 text-gray-700 dark:text-gray-300">
                                                          Das entspricht einer Veränderung von <span class="font-bold">{{ $percentageText }}</span>.
                                                      </p>
                                                  @endif

                                                  <!-- Visualization: Progress Bar -->
                                                  <div class="mt-4">
                                                      <div class="w-full bg-gray-200 rounded-full dark:bg-gray-600">
                                                          <div class="{{ $barColor }} text-xs font-medium text-white text-center p-0.5 leading-none rounded-full" style="width: {{ $barWidth }}%">
                                                              @if($valueCurrent > 0)
                                                                  {{ number_format($percentage, 2) }}%
                                                              @else
                                                                  {{ $percentageText }}
                                                              @endif
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          @endforeach
                                      </div>
                                  @else
                                      <div class="mt-8 text-center">
                                          <p class="text-gray-700 dark:text-gray-300">
                                              Für {{ $quarter }} sind noch keine Vergleichsdaten verfügbar.
                                          </p>
                                      </div>
                                  @endif
                              </div>
                          @else
                              <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-6">
                                  <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200">Bericht {{ $quarter }}</h3>
                                  <p class="mt-2 text-gray-700 dark:text-gray-300">
                                      Der Bericht für {{ $quarter }} ist noch in Bearbeitung.
                                  </p>
                              </div>
                          @endif
                      </div>
                  @endforeach
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
