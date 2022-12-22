<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body >
        <div>
            <div class="navbar">
                <nav class="bg-gray-800">
                    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                      <div class="relative flex h-16 items-center justify-between">
                        
                        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                          
                          <div class="hidden sm:ml-6 sm:block">
                            <div class="flex text-xl space-x-4">
                              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                              <a href="#" class="bg-gray-900 text-slate-200 px-3 py-2 rounded-md text-xl font-medium" aria-current="page">Dashboard</a>
                  
                              <a href="#" class="text-slate-200 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Master Price</a>
                  
                              <a href="#" class="text-slate-200 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl first-line:font-medium">Custom Price</a>
                  
                              <a href="#" class="text-slate-200 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Calendar</a>
                              <a href="#" class="text-slate-200 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Reports</a>
                            </div>
                          </div>
                        </div>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                          <button type="button" class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="sr-only">View notifications</span>
                            <!-- Heroicon name: outline/bell -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                          </button>
                  
                          <!-- Profile dropdown -->
                          <div class="relative ml-3">
                            <div>
                              <button type="button" class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
    
                                <img class="h-8 w-8 rounded-full" src="../public/IMG_6753.JPG" alt="">
                              </button>
                            </div>
                  
                            
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <!-- Mobile menu, show/hide based on menu state. -->
                    <div class="sm:hidden" id="mobile-menu">
                      <div class="space-y-1 px-2 pt-2 pb-3">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="#" class="bg-gray-900 text-slate-200 block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>
                  
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>
                  
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>
                  
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
                        <a href="#" class="text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Reports</a>
                        
                    </div>
                    </div>
                  </nav>
            </div>
            <div class="border-b-2 border-grey-500">
                <span class="text-4xl ml-64 font-bold">Master Price</span>
            </div>
            <div class="w-10/12 ml-40">
                <div class="tripchoose border-b-2 border-indigo-500">
                    <div class="trip">
                        <ul class="flex">
                            <li class="mr-3 listing">
                                <a class="inline-block    hover:border-gray-200 text-black hover:bg-gray-200 py-1 px-3" href="#">Round Trip</a>
                              </li>
                            <li class="mr-3 listing">
                              <a class="inline-block    py-1 px-5  bg-blue-900 text-white" href="#">One Way</a>
                            </li>
                            <li class="mr-3 listing">
                              <a class="inline-block  hover:border-gray-200 text-black hover:bg-gray-200 py-1 px-3" href="#">Multi City</a>
                            </li>
                            
                          </ul>
                    </div>
                </div>
                <div class="search-option border-b-2  border-indigo-500">
                    <div class="forms ">
                        <form class="w-full ">
                            
                            
                            <div class="flex flex-wrap   mb-2 border-b-2  border-indigo-500">
                              <div  class="ml-2 mt-2 mb-2">
                                
                                <input class="appearance-none block w-48   font-bold text-gray-900 border border-black  py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="LHR">
                              </div>
                              <div class="ml-2 mt-2 mb-2">
                                
                                <input class="appearance-none  block w-48 bg-blue-100 font-bold text-gray-900 border border-black  py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="CDG">
                              </div>
                              <div>
                                
                                    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
                                    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
                                  
                                    <style>
                                      [x-cloak] {
                                        display: none;
                                      }
                                    </style>
                                  
                                    <div class="antialiased sans-serif">
                                        <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
                                            <div class="container   px-2   mt-2">
                                                <div class=" w-44  bg-blue-100">
                                  
                                                    
                                                    <div class="relative">
                                                        <input type="hidden" name="date" x-ref="date">
                                                        <input 
                                                            type="text"
                                                            readonly
                                                            x-model="datepickerValue"
                                                            @click="showDatepicker = !showDatepicker"
                                                            @keydown.escape="showDatepicker = false"
                                                            class="w-full bg-blue-100 pl-4 pr-10 py-3 leading-none border border-black shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                                            placeholder="Select date">
                                  
                                                            <div class="absolute  top-0 right-0 px-3 py-2">
                                                                <svg class="h-6 w-6 text-gray-400"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                                                </svg>
                                                            </div>
                                  
                                  
                                                            <!-- <div x-text="no_of_days.length"></div>
                                                            <div x-text="32 - new Date(year, month, 32).getDate()"></div>
                                                            <div x-text="new Date(year, month).getDay()"></div> -->
                                  
                                                            <div 
                                                                class="bg-white mt-12 rounded-lg shadow p-4 absolute top-0 left-0" 
                                                                style="width: 17rem" 
                                                                x-show.transition="showDatepicker"
                                                                @click.away="showDatepicker = false">
                                  
                                                                <div class="flex justify-between items-center mb-2">
                                                                    <div>
                                                                        <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                                                                        <span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
                                                                    </div>
                                                                    <div>
                                                                        <button 
                                                                            type="button"
                                                                            class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full" 
                                                                            :class="{'cursor-not-allowed opacity-25': month == 0 }"
                                                                            :disabled="month == 0 ? true : false"
                                                                            @click="month--; getNoOfDays()">
                                                                            <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                                                            </svg>  
                                                                        </button>
                                                                        <button 
                                                                            type="button"
                                                                            class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full" 
                                                                            :class="{'cursor-not-allowed opacity-25': month == 11 }"
                                                                            :disabled="month == 11 ? true : false"
                                                                            @click="month++; getNoOfDays()">
                                                                            <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                                                            </svg>									  
                                                                        </button>
                                                                    </div>
                                                                </div>
                                  
                                                                <div class="flex flex-wrap mb-3 -mx-1">
                                                                    <template x-for="(day, index) in DAYS" :key="index">	
                                                                        <div style="width: 14.26%" class="px-1">
                                                                            <div
                                                                                x-text="day" 
                                                                                class="text-gray-800 font-medium text-center text-xs"></div>
                                                                        </div>
                                                                    </template>
                                                                </div>
                                  
                                                                <div class="flex flex-wrap -mx-1">
                                                                    <template x-for="blankday in blankdays">
                                                                        <div 
                                                                            style="width: 14.28%"
                                                                            class="text-center border p-1 border-transparent text-sm"	
                                                                        ></div>
                                                                    </template>	
                                                                    <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">	
                                                                        <div style="width: 14.28%" class="px-1 mb-1">
                                                                            <div
                                                                                @click="getDateValue(date)"
                                                                                x-text="date"
                                                                                class="cursor-pointer text-center text-sm leading-none rounded-full leading-loose transition ease-in-out duration-100"
                                                                                :class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }"	
                                                                            ></div>
                                                                        </div>
                                                                    </template>
                                                                </div>
                                                            </div>
                                  
                                                    </div>	 
                                                </div>
                                  
                                            </div>
                                        </div>
                                  
                                        <script>
                                            const MONTH_NAMES = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                                            const DAYS = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
                                  
                                            function app() {
                                                return {
                                                    showDatepicker: false,
                                                    datepickerValue: '',
                                  
                                                    month: '',
                                                    year: '',
                                                    no_of_days: [],
                                                    blankdays: [],
                                                    days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                                  
                                                    initDate() {
                                                        let today = new Date();
                                                        this.month = today.getMonth();
                                                        this.year = today.getFullYear();
                                                        this.datepickerValue = new Date(this.year, this.month, today.getDate()).toDateString();
                                                    },
                                  
                                                    isToday(date) {
                                                        const today = new Date();
                                                        const d = new Date(this.year, this.month, date);
                                  
                                                        return today.toDateString() === d.toDateString() ? true : false;
                                                    },
                                  
                                                    getDateValue(date) {
                                                        let selectedDate = new Date(this.year, this.month, date);
                                                        this.datepickerValue = selectedDate.toDateString();
                                  
                                                        this.$refs.date.value = selectedDate.getFullYear() +"-"+ ('0'+ selectedDate.getMonth()).slice(-2) +"-"+ ('0' + selectedDate.getDate()).slice(-2);
                                  
                                                        console.log(this.$refs.date.value);
                                  
                                                        this.showDatepicker = false;
                                                    },
                                  
                                                    getNoOfDays() {
                                                        let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();
                                  
                                                        // find where to start calendar day of week
                                                        let dayOfWeek = new Date(this.year, this.month).getDay();
                                                        let blankdaysArray = [];
                                                        for ( var i=1; i <= dayOfWeek; i++) {
                                                            blankdaysArray.push(i);
                                                        }
                                  
                                                        let daysArray = [];
                                                        for ( var i=1; i <= daysInMonth; i++) {
                                                            daysArray.push(i);
                                                        }
                                  
                                                        this.blankdays = blankdaysArray;
                                                        this.no_of_days = daysArray;
                                                    }
                                                }
                                            }
                                        </script>
                                      </div>
                                 
                              </div>
                              <div >
                                    
                                
                              </div>
                              <div class="ml-2 mt-2 mb-2">
                                
                                <div class="relative">
                                  <select class="block  appearance-none w-28 font-bold text-gray-500  border border-black  py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                    <option>Day-</option>
                                    
                                  </select>
                                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 font-bold text-gray-500">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                  </div>
                                </div>
                              </div>
                              <div class="ml-2 mt-2 mb-2">
                                
                                <div class="relative">
                                  <select class="block appearance-none w-28 font-bold  border border-black  text-gray-500 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                    <option>Day+</option>
                                    
                                  </select>
                                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 font-bold text-gray-500">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                  </div>
                                </div>
                              </div>
                              <div class="ml-2 mt-2 mb-2">
                                
                                <div class="relative">
                                  <select class="block appearance-none w-56  border border-black font-bold text-gray-500 py-3 px-4 pr-8  leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                    <option>Any time</option>
                                    
                                  </select>
                                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 font-bold text-gray-500">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                  </div>
                                </div>
                              </div>
                              <div class="font-bold text-3xl mt-3 ml-3 mr-3" >+</div>
                              <div class="ml-2 mt-2 mb-2">
                                
                                <div class="relative">
                                  <select class="block appearance-none w-36  border border-black font-bold text-gray-500 py-3 px-4 pr-8  leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                    <option>ADT</option>
                                    
                                  </select>
                                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 font-bold text-gray-500">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                  </div>
                                </div>
                              </div>
                              <div class="ml-2 mt-2 mb-2">
                                
                                <div class="relative">
                                  <select class="block appearance-none w-36  border border-black font-bold text-gray-500 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                    <option>1</option>
                                    
                                  </select>
                                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 font-bold text-gray-500">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                  </div>
                                </div>
                              </div>
                              <div class="font-bold text-3xl mt-3 ml-4">+</div>
                            </div>
                            <div class="extra">
                                <div class="flex flex-row">
                                    <div>
                                      <div class="block form-check">
                                        <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckDefault">
                                        
                                      </div>
                                      
                                    </div>
                                    <div class="environment flex-row">
                                        
                                        <div class=" ">
                                            
                                            <label  class="ml-2 mt-1 mr-44 w-56 font-bold text-black dark:text-gray-300">Extra Options</label>
                                        </div>
                                    </div>
                                    <div class="environment flex-row">
                                        
                                        <div class=" ">
                                            
                                            <label  class="ml-80 labelEnv font-bold text-black dark:text-gray-300">Environment</label>
                                        </div>
                                    </div>
                                    <div class="environment flex-row">
                                        
                                        <div class=" ">
                                            <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="mt-1 ml-4 file:w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            
                                        </div>
                                    </div>
                                    <div class="environment flex-row">
                                        
                                        <div class=" ">
                                            
                                            <label  class="ml-2 mt-1  font-bold text-black dark:text-gray-300">Dummy</label>
                                        </div>
                                    </div>
                                    <div class="environment flex-row">
                                        
                                        <div class=" ">
                                            <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="mt-1 ml-2 file:w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            
                                        </div>
                                    </div>
                                    <div class="environment flex-row">
                                        
                                        <div class=" ">
                                            
                                            <label  class="ml-2 mt-1 mr-96  font-bold text-black dark:text-gray-300">PDT</label>
                                        </div>
                                    </div>

                                    <div class="button flex-row">
                                        <button class="bg-indigo-900 ml-76 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                                            SEARCH
                                          </button>
                                    </div>
                                    
                                  </div>
                                
                            </div>
                          </form>
                    </div>
                </div>
                <div class="table">
                    <div>
                        @if(count($data)>0)
                            <p class="font-bold mb-8">{{$data['message']}}</p>
                        @endif
                        <table class="tablee">
                            <thead class="bg-slate-200 text-gray-600 ">
                              <tr>
                                <th>FLIGHT</th>
                                <th>AIRCRAFT</th>
                                <th>CLASS</th>
                                <th>FARE</th>
                                <th>ROUTE</th>
                                <th>DEPARTURE</th>
                                <th>ARRIVAL</th>
                                <th>DURATION</th>
                                <th class="ml-80">PRICE</th>
                                
                              </tr>
                            </thead>
                            <tbody class="ml-4">
                                
                                @foreach ($data['flightOffer'] as $flight)
                                    
                                    @if ($loop->even)
                                    <tr class="bg-slate-200 pl-8 text-gray-700  border-b-2 border-red-500"> 
                                        @foreach($flight['itineraries'] as $iti)
                                                
                                                <td class="pl-8">
                                                    
                                                        
                                                    
                                                    @foreach ($iti['segments'] as $seg)
                                                    
                                                        <div>{{$seg['marketingCarrier'];}} 
                                                    
                                                            {{$seg['aircraft']}}</div>
                                                        
                                                    
                                                
                                                     @endforeach
                                                    
                                                </td>
                                                <td class="pl-8">
                                                    
                                                        
                                                    
                                                    @foreach ($iti['segments'] as $seg)
                                                    
                                                    <div>{{$seg['flightNumber'];}} </div>
                                                        
                                                    
                                                    
                                                
                                                     @endforeach
                                                    
                                                </td>
                                                
                                                
                                            
                                            
                                                
                                        @endforeach
                                        <td class="pl-8">
                                            @foreach($flight['class'] as $class)
                                                @foreach($class as $cls)
                                                   <div>{{$cls}}</div> 
                                                @endforeach
                                            @endforeach
                                        </td>
                                        <td class="pl-8">
                                            @foreach($flight['fareBasis'] as $fareBasis)
                                                @foreach($fareBasis as $fare)
                                                    <div>{{$fare}}</div>
                                                @endforeach
                                            @endforeach
                                        </td>
                                        <td class="pl-8">
                                            @foreach($flight['itineraries'] as $iti)
                                            @foreach($iti['segments'] as $seg)
                                            <div>{{$seg['departure']['iataCode']}}-
                                                {{$seg['arrival']['iataCode']}}</div>
                                            
                                            @endforeach
                                            @endforeach
            
                                            
                                            
                                        </td>
                                        <td class="pl-8">
                                            @foreach ($iti['segments'] as $seg)
                                            <div>{{$seg['departure']['at']}}</div>
                                            
                                            
                                        
                                             @endforeach
                                        </td>
                                        <td class="pl-8">
                                            @foreach ($iti['segments'] as $seg)
                                            <div>{{$seg['arrival']['at']}}</div>
                                            
                                            
                                        
                                             @endforeach
                                        </td>
                                        
                                        <td class="pl-8">
                                            {{$iti['duration']}}
                                        </td>
                                        <td class="pl-8">
                                            {{$flight['price']}}
                                            <div class="button">
                                                <button class="bg-indigo-900 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                                                    SELECT
                                                  </button>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    @else
                                    <tr class="border-b-2 bg-slate-50 text-gray-700 border-red-500"> 
                                        @foreach($flight['itineraries'] as $iti)
                                                
                                                <td class="pl-8">
                                                    
                                                        
                                                    
                                                    @foreach ($iti['segments'] as $seg)
                                                    
                                                    
                                                        
                                                        <div>{{$seg['marketingCarrier'];}} 
                                                    
                                                            {{$seg['aircraft']}}</div>
                                                
                                                     @endforeach
                                                    
                                                </td>
                                                <td class="pl-8">
                                                    
                                                        
                                                    
                                                    @foreach ($iti['segments'] as $seg)
                                                    
                                                   
                                                        
                                                    
                                                        <div>{{$seg['flightNumber'];}} </div>
                                                
                                                     @endforeach
                                                    
                                                </td>
                                                
                                                
                                            
                                            
                                                
                                        @endforeach
                                        <td class="pl-8">
                                            @foreach($flight['class'] as $class)
                                                @foreach($class as $cls)
                                                   <div>{{$cls}}</div> 
                                                @endforeach
                                            @endforeach
                                        </td>
                                        <td class="pl-8">
                                            @foreach($flight['fareBasis'] as $fareBasis)
                                                @foreach($fareBasis as $fare)
                                                   <div>{{$fare}}</div> 
                                                @endforeach
                                            @endforeach
                                        </td>
                                        <td class="pl-8">
                                            @foreach($flight['itineraries'] as $iti)
                                            @foreach($iti['segments'] as $seg)
                                            <div>{{$seg['departure']['iataCode']}}-
                                                {{$seg['arrival']['iataCode']}}</div>
                                            
                                            @endforeach
                                            @endforeach
            
                                            
                                            
                                        </td>
                                        <td class="pl-8">
                                            @foreach ($iti['segments'] as $seg)
                                            <div> {{$seg['departure']['at']}}</div>
                                           
                                            
                                        
                                             @endforeach
                                        </td>
                                       
                                        <td class="pl-8">
                                            @foreach ($iti['segments'] as $seg)
                                            <div>{{$seg['arrival']['at']}}</div>
                                            
                                            
                                        
                                             @endforeach
                                        </td>
                                        <td class="pl-8">
                                            {{$iti['duration']}}
                                        </td>
                                        <td class="pl-8">
                                            {{$flight['price']}}
                                            <div class="button">
                                                <button class="bg-indigo-900 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                                                    SELECT
                                                  </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endif
                                
                                
                            @endforeach
                              
                              
                            </tbody>
                          </table>
                    </div>
                </div>
                
            </div>
            
            
            
        </div>
    
</body>
<script>
    const MONTH_NAMES = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December",
    ];
    const MONTH_SHORT_NAMES = [
      "Jan",
      "Feb",
      "Mar",
      "Apr",
      "May",
      "Jun",
      "Jul",
      "Aug",
      "Sep",
      "Oct",
      "Nov",
      "Dec",
    ];
    const DAYS = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

    function app() {
      return {
        showDatepicker: false,
        datepickerValue: "",
        selectedDate: "2021-02-04",
        dateFormat: "DD-MM-YYYY",
        month: "",
        year: "",
        no_of_days: [],
        blankdays: [],
        initDate() {
          let today;
          if (this.selectedDate) {
            today = new Date(Date.parse(this.selectedDate));
          } else {
            today = new Date();
          }
          this.month = today.getMonth();
          this.year = today.getFullYear();
          this.datepickerValue = this.formatDateForDisplay(
            today
          );
        },
        formatDateForDisplay(date) {
          let formattedDay = DAYS[date.getDay()];
          let formattedDate = ("0" + date.getDate()).slice(
            -2
          ); // appends 0 (zero) in single digit date
          let formattedMonth = MONTH_NAMES[date.getMonth()];
          let formattedMonthShortName =
            MONTH_SHORT_NAMES[date.getMonth()];
          let formattedMonthInNumber = (
            "0" +
            (parseInt(date.getMonth()) + 1)
          ).slice(-2);
          let formattedYear = date.getFullYear();
          if (this.dateFormat === "DD-MM-YYYY") {
            return `${formattedDate}-${formattedMonthInNumber}-${formattedYear}`; // 02-04-2021
          }
          if (this.dateFormat === "YYYY-MM-DD") {
            return `${formattedYear}-${formattedMonthInNumber}-${formattedDate}`; // 2021-04-02
          }
          if (this.dateFormat === "D d M, Y") {
            return `${formattedDay} ${formattedDate} ${formattedMonthShortName} ${formattedYear}`; // Tue 02 Mar 2021
          }
          return `${formattedDay} ${formattedDate} ${formattedMonth} ${formattedYear}`;
        },
        isSelectedDate(date) {
          const d = new Date(this.year, this.month, date);
          return this.datepickerValue ===
            this.formatDateForDisplay(d) ?
            true :
            false;
        },
        isToday(date) {
          const today = new Date();
          const d = new Date(this.year, this.month, date);
          return today.toDateString() === d.toDateString() ?
            true :
            false;
        },
        getDateValue(date) {
          let selectedDate = new Date(
            this.year,
            this.month,
            date
          );
          this.datepickerValue = this.formatDateForDisplay(
            selectedDate
          );
          // this.$refs.date.value = selectedDate.getFullYear() + "-" + ('0' + formattedMonthInNumber).slice(-2) + "-" + ('0' + selectedDate.getDate()).slice(-2);
          this.isSelectedDate(date);
          this.showDatepicker = false;
        },
        getNoOfDays() {
          let daysInMonth = new Date(
            this.year,
            this.month + 1,
            0
          ).getDate();
          // find where to start calendar day of week
          let dayOfWeek = new Date(
            this.year,
            this.month
          ).getDay();
          let blankdaysArray = [];
          for (var i = 1; i <= dayOfWeek; i++) {
            blankdaysArray.push(i);
          }
          let daysArray = [];
          for (var i = 1; i <= daysInMonth; i++) {
            daysArray.push(i);
          }
          this.blankdays = blankdaysArray;
          this.no_of_days = daysArray;
        },
      };
    }
  </script>

</html>
