@extends('layout/main')
@section('main')
<div class="app-content content">
    <div class="row match-height">
        <!-- active users card -->
        <div class="col-xl-12 col-lg-12 cc_cursor">
        <div class="card active-users" style="">
          <div class="card-header border-0">
            <h4 class="card-title">Active Users</h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content">
            <div id="audience-list-scroll" class="table-responsive position-relative">
              <table class="table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Available Data</th>
                    <th>Downloads</th>
                    <th>Status</th>
                    <th>More</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($newsAll as $key => $news_id)
                  <tr>
                    <td class="text-truncate cc_cursor">
                      <span class="text-truncate">{{ $news_id->title }}</span>
                    </td>
                    <td class="align-middle cc_cursor">
                      <span>shwellFlint@gmail.com</span>
                    </td>
                    <td class="align-middle">
                      <span>450MB</span>
                    </td>
                    <td class="align-middle">
                      <div class="progress my-75">
                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100" style="width:55%">55%</div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <span class="badge {{ $news_id->status == 4 ? 'badge-success' : 'badge-danger' }} ">{{ $news_id->status == 4 ? 'Hoạt động' : 'không hoạt động' }}</span>
                    </td>                
                    <td class="align-middle">
                      <div class="dropdown">
                        <span class="feather icon-more-vertical dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </span>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Subscription</a>
                          <a class="dropdown-item" href="#">Extras</a>
                          <a class="dropdown-item" href="#">Newslatter</a>
                        </div>
                      </div>
                      
                    </td>
                  </tr>
                    @endforeach
                    
                </tbody>
              </table>
              {{ $newsAll->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection