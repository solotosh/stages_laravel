@extends('home.layout')

@section('content')
    <br>
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">
            <!-- Stages Statistics -->
            <div class="row content">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="{{ asset('img/banner.jpg') }}" class="img-fluid">
                </div>
                
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                    <div class="section-title">
                        <h2>County Government Of Narok Projects Monitoring and Tracking System | Transparent Governance</h2>
                    </div>
                    <p class="text-center">
                        Tracking System of Narok County
                    </p>
                    <div class="box featured">
                        <h3 align="left" style="color: red;">
                            Current Stages Statistics
                        </h3>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mt-4">
                                    <a href="{{ route('home') }}" class="text-dark">
                                        <div class="card">
                                            <div class="card-body text-success">
                                                <div class="lead">All stages</div>
                                                <h2 class="card-title card-title-number">{{ $totalStages }}</h2>
                                                <p>Total Amount: Ksh {{ number_format($totalAmount, 2) }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-12 mt-4">
                                    <a href="{{ route('stagescompleted') }}" class="text-dark">
                                        <div class="card">
                                            <div class="card-body text-success">
                                                <div class="lead">Completed stages</div>
                                                <h2 class="card-title">{{ $completedStages }}</h2>
                                                <p>Budget Ksh {{ number_format($completedAmount, 2) }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-12 mt-4">
                                    <a href="{{ route('stagesin-progress') }}" class="text-dark">
                                        <div class="card">
                                            <div class="card-body text-primary">
                                                <div class="lead">In Progress</div>
                                                <h2 class="card-title">{{ $inProgressStages }}</h2>
                                                <p class="">Budget Ksh {{ number_format($inProgressAmount, 2) }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-12 mt-4">
                                    <a href="{{ route('stagespending') }}" class="text-dark">
                                        <div class="card">
                                            <div class="card-body text-warning">
                                                <div class="lead">Pending</div>
                                                <h2 class="card-title">{{ $pendingStages }}</h2>
                                                <p class="">Budget Ksh {{ number_format($pendingAmount, 2) }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Display All Stages -->
            @if ($stages->count() > 0)
            <div class="row mt-4">
                <div class="col-lg-12">
                    <h3>All Stages</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Stage Name</th>
                                    <th>Ward</th>
                                    <th>Subcounty</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stages as $stage)
                                    <tr>
                                        <td>{{ $stage->name }}</td>
                                        <td>
                                            @if ($stage->ward) <!-- Check if ward relationship exists -->
                                                {{ $stage->ward->name }} <!-- Access ward name -->
                                            @else
                                                N/A <!-- Fallback if no ward -->
                                            @endif
                                        </td>
                                        <td>
                                            @if ($stage->subcounty) <!-- Check if subcounty relationship exists -->
                                                {{ $stage->subcounty->name }} <!-- Access subcounty name -->
                                            @else
                                                N/A <!-- Fallback if no subcounty -->
                                            @endif
                                        </td>
                                        <td>{{ $stage->status }}</td>
                                        <td>Ksh {{ number_format($stage->amount, 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @else
            <div class="row mt-4">
                <div class="col-lg-12">
                    <p class="text-center">No stages found.</p>
                </div>
            </div>
        @endif
        </div>
    </section>
@endsection