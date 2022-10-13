@extends('layouts.master')
@section('title', 'İletişim')

@section('css')

@endsection

@section('style')
@endsection



@section('breadcrumb-items')
<span class="sub-page-breadcrumb"><a href="{{ route('index') }}">Anasayfa</a> - Yardım Merkezi</span>
@endsection

@section('content')

<section class="padding-100-0 position-relative">
    <div class="body_overlay_ono"></div>
    <div class="container">
        <div class="col-md-12 help-center-header text-center">
            <h5 class="help-center-title"><span>Yardım Merkezi</span>Bazı sorularınızı yanıtladık.</h5>
            <p class="help-center-text">Sizden gelen sorun ve sorulardan oluşturduğumuz yardım merkezinde işinize yarayabilecek bazı bilgileri toparladık. Eğer ki sorununuzun yanıtını hala bulamadıysanız <a href="{{ route('iletisim') }}">İletişim</a> sayfasından bizimle irtibata geçebilirsiniz.</p>
        </div>
      
        <div class="row question-area-page justify-content-left mr-tp-120">
            <div class="col-md-4 no-phone-display">
                <div class="question-area-answer-navs">
                    <div class="nuhost-filter-container">

                        <i class="fas fa-search"></i>
                        <input type="text" id="nuhost-filter-input"
                            onkeyup="if (!window.__cfRLUnblockHandlers) return false; FilterListSection()"
                            placeholder="Soru Ara.." data-cf-modified-bda0b09a88ba59483036ce58-="">

                    </div>
                    <div class="nuhost-filter-list-container min-height-auto">

                        <ul id="nuhost-filter-list">

                            @foreach ($questions as $item)
                                <li><a href="#{{ $item->hc_actionId }}">{{ $item->hc_question }} ? <i class="fas fa-angle-right"></i></a></li>
                            @endforeach

                        </ul>

                    </div>

                </div>
            </div>
            <div class="col-md-8">
                <div class="question-area-answer-body">
                    <ul>
                        @foreach ($answers as $item)

                        <li id="{{ $item->hc_actionId }}"><span>{{ $item->hc_question }} ?</span>
                            <p>{{ $item->hc_answer }}</p>
                        </li>
                            
                        @endforeach
                        
                    
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection



@section('script')


@endsection
