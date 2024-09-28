<x-admin-layout>
    <div class="container">
<h1>New Orders</h1>
{{-- create button for old orders --}}

      <!-- Success Message -->
      @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif

      <!-- Products Table -->


      <!-- Orders Table -->
      <table class="table">
        <thead>
          <tr>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
              Order ID
            </th>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
              Customer Name
            </th>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
              Order Date
            </th>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
              Total Price
            </th>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
              Status
            </th>
            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
              Action
            </th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
          @foreach($orders as $order)
          <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
              <div class="text-base font-semibold text-gray-900 dark:text-white">{{ $order->id }}</div>
            </td>
            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
              {{ $order->name }}
            </td>
            <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
              {{ $order->created_at }}
            </td>
            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
              Rs. {{ $order->total }}
            </td>
            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white" style="color: {{ $order->status == '0' ? 'red' : 'green' }}">
              {{ $order->status == '0' ? 'Pending' : 'Delivered' }}
            </td>
            <td class="py-4 pl-4 pr-3 text-sm font-medium">
              <div class="flex gap-3">
                <a href="{{ url('orderadmion/' . $order->id) }}" class="rounded-md px-4 py-2 text-sm font-semibold text-white transition-all duration-300" style="background-color: green">View</a>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </x-admin-layout>
