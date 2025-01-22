@extends('layouts.app-dashboard')

@section('title', 'WZLCOME')

@section('content')
<h1 class="app-page-title">Overview</h1>

			    <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
				    <div class="inner">
					    <div class="app-card-body p-3 p-lg-4">
						    <h3 class="mb-3">Welcome, developer!</h3>
						    <div class="row gx-5 gy-3">
						        <div class="col-12 col-lg-9">

							        <div>Portal is a free Bootstrap 5 admin dashboard template. The design is simple, clean and modular so it's a great base for building any modern web app.</div>
							    </div><!--//col-->
							    <div class="col-12 col-lg-3">
								    <a class="btn app-btn-primary" href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-arrow-down me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
  <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
  <path fill-rule="evenodd" d="M8 6a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 10.293V6.5A.5.5 0 0 1 8 6z"/>
</svg>Free Download</a>
							    </div><!--//col-->
						    </div><!--//row-->
						    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					    </div><!--//app-card-body-->

				    </div><!--//inner-->
			    </div><!--//app-card-->

                <div class="row g-4 mb-4">
				    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">عدد التحويسات</h4>
                                <div class="stats-figure">{{ $tahwissaCount }}</div>
                                <div class="stats-meta text-success">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
                                    </svg>
                                    منذ التسجيل
                                </div>
                            </div><!--//app-card-body-->
                            <a class="app-card-link-mask" href="#"></a>
                        </div><!--//app-card-->
                    </div><!--//col-->


				    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">عدد المنتجات</h4>
                                <div class="stats-figure">{{ $productCount }}</div>
                                <div class="stats-meta text-success">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
                                    </svg>
                                    منذ التسجيل
                                </div>
                            </div><!--//app-card-body-->
                            <a class="app-card-link-mask" href="#"></a>
                        </div><!--//app-card-->
                    </div><!--//col-->

                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Total Reservations</h4>
                                <div class="stats-figure">{{ $reservationsCount }}</div>
                                <div class="stats-meta">عدد الحجوزات الإجمالية</div>
                            </div><!--//app-card-body-->
                            <a class="app-card-link-mask" href="#"></a>
                        </div><!--//app-card-->
                    </div><!--//col-->
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Total Reservations</h4>
                                <div class="stats-figure">{{ $reservationsProductCount }}</div>
                                <div class="stats-meta">عدد الحجوزات الإجمالية</div>
                            </div><!--//app-card-body-->
                            <a class="app-card-link-mask" href="#"></a>
                        </div><!--//app-card-->
                    </div><!--//col-->



			    </div><!--//row-->
                <div class="row g-4 mb-4">
                    <div class="col-12 col-lg-6">
                        <div class="app-card app-card-chart h-100 shadow-sm">
                            <div class="app-card-header p-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Reservations per Tahwessa</h4>
                                    </div><!--//col-->
                                    <div class="col-auto">
                                        <div class="card-header-action">
                                            <a href="charts.html">More charts</a>
                                        </div><!--//card-header-actions-->
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//app-card-header-->
                            <div class="app-card-body p-3 p-lg-4">
                                <div class="mb-3 d-flex">
                                    <select class="form-select form-select-sm ms-auto d-inline-flex w-auto">
                                        <option value="1" selected>This week</option>
                                        <option value="2">Today</option>
                                        <option value="3">This Month</option>
                                        <option value="4">This Year</option>
                                    </select>
                                </div>
                                <div class="chart-container">
                                    <canvas id="canvas-barchart"></canvas>
                                </div>
                            </div><!--//app-card-body-->
                        </div><!--//app-card-->
                    </div><!--//col-->

                    <div class="col-12 col-lg-6">
                        <div class="app-card app-card-chart h-100 shadow-sm">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Total Reservations</h4>
                                <div class="stats-figure">{{ $totalReservations }}</div> <!-- Display the total reservations -->
                                <div class="stats-meta text-success">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
                                    </svg>
                                    {{ number_format($percentageIncrease, 2) }}%
                                </div>
                            </div>
                        </div><!--//app-card-->
                    </div><!--//col-->
                </div><!--//row-->


@endsection
