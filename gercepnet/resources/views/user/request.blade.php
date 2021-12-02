@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/homeuser.css')}}">
@endsection
@include('navbar.usernavbar')

@section('container')
    <h1>{{ $title }}</h1>

    <div class="form-floating">
        <!-- component -->
        <section class="antialiased text-gray-600 h-screen px-4">
          <div class="flex flex-col justify-center h-full">
              <!-- Table -->
              <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                  <div class="p-3">
                      <div class="overflow-x-auto">
                          <table class="table-auto w-full">
                              <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                  <tr>
                                      <th class="p-2 whitespace-nowrap">
                                          <div class="font-semibold text-left">Name</div>
                                      </th>
                                      <th class="p-2 whitespace-nowrap">
                                          <div class="font-semibold text-left">Email</div>
                                      </th>
                                      <th class="p-2 whitespace-nowrap">
                                          <div class="font-semibold text-left">Spent</div>
                                      </th>
                                      <th class="p-2 whitespace-nowrap">
                                          <div class="font-semibold text-center">Country</div>
                                      </th>
                                  </tr>
                              </thead>
                              <tbody class="text-sm divide-y divide-gray-100">
                                  <tr>
                                      <td class="p-2 whitespace-nowrap">
                                          <div class="flex items-center">
                                              <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg" width="40" height="40" alt="Alex Shatov"></div>
                                              <div class="font-medium text-gray-800">Alex Shatov</div>
                                          </div>
                                      </td>
                                      <td class="p-2 whitespace-nowrap">
                                          <div class="text-left">alexshatov@gmail.com</div>
                                      </td>
                                      <td class="p-2 whitespace-nowrap">
                                          <div class="text-left font-medium text-green-500">$2,890.66</div>
                                      </td>
                                      <td class="p-2 whitespace-nowrap">
                                          <div class="text-lg text-center">🇺🇸</div>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
        </section>
      </div>
@endsection