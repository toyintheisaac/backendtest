<x-app-layout>
  {{--   <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

   <div class="container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-3">
                <div class="row">
                    <div class="col-6 col-md-4">
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">System Pooling Balance</h5>
                              <h4>30,000.00</h4>
                              {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                            </div>
                          </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Wallet Balance</h5>
                              <h4>30,000.00</h4>
                            </div>
                          </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Transactions</h5>
                              <h6>(1) Pending Tranaction</h6>

                              <h6>(1) Required Modification</h6> {{-- if user is maker --}}

                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
   </div>




   <div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <h4>(13) Transactions</h4>
                </div>
                <div class="col-6 text-end">
                    <a href="{{ route('transactions.create') }}" class="btn btn-info">Create Transaction</a>
                </div>
            </div>

            <div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>SN</th>
                <th>User</th>
                <th>Type</th>
                <th>Amount</th>
                <th>Descrip.</th>
                <th>Updated By</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>name</td>
                <td>type</td>
                <td>amount</td>
                <td>description</td>
                <td>status</td>
                <td>By</td>
                <td>
                            <form action="" method="post">
                                @csrf
                                <button type="submit"  class="btn btn-success">Approve</button>
                            </form>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>name</td>
                <td>type</td>
                <td>amount</td>
                <td>description</td>
                <td>status</td>
                <td>by</td>
                <td>
                    <form action="" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">Reject</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
        </div>
        </div>
    </div>
   </div>





</x-app-layout>
