 <div class="col-lg-3 col-6">
     <!-- small box -->
     <div class="small-box bg-{{ $color ?? 'primary' }}">
         <div class="inner">
             <h3>{{ $count ?? 0 }}</h3>

             <p>{{ $card_title ?? '?????' }}</p>
         </div>
         <div class="icon">
             <i class="{{ $icon ?? 'ion ion-stats-bars' }}"></i>
         </div>
         {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
     </div>
 </div>
