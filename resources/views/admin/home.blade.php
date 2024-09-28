<x-admin-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header" style="color: black">Users</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $usersCount }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header" style="color: black">Orders</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $ordersCount }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-header" style="color: black">Products</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $productsCount }}</h5>
                    </div>
                </div>
            </div>

            {{-- <div class="col-md-3">
                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div class="card-header">Pending Orders</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $pendingOrdersCount }}</h5>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</x-admin-layout>
