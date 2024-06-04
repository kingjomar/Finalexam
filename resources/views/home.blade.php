@extends('layouts.app')

@section('content')
<main class="content-wrapper">
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <div class="fs-3">Dashboard</div>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-primary">
                  <div class="inner">
                    <h3>150</h3>

                    <p>BSIT 3A Examiners</p>
                  </div>
                  <div class="icon">
                    <i class="inner-icon ion ion-bag"></i>
                  </div>
                  <a href="{{ route('employee.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
             </div></div>
        
                   
                  
           
                </div>
                
                </div>
              </div>
              <!-- /.Start col -->
            </div>
            <!-- /.row (main row) -->
          </div><!-- /.container-fluid -->
        </div>
      </main>
      
@endsection