@php
    $documents = \App\Notification::latest()
        ->limit(20)
        ->get();
@endphp

<style>
    .list-document {
        list-style: disc;
        padding-left: 1.5rem;
        height: 300px;
        overflow: hidden;
    }

    .list-document li {
        margin-bottom: .5rem;
    }
</style>

<div class="widget color-default">
    <h3 class="block-title"><span>Thông báo</span></h3>

    <div class="list-post-block list-document-block">
        <ul class="list-document marquee-vert">
            @foreach($documents as $document)
                <li class="clearfix">
                    <a href="{{route('documents.show', $document->slug)}}">{{$document->title}}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<script>
    window.addEventListener("load", (event) => {
        jQuery(document).ready(function($) {
            $('.marquee-vert').marquee({
                duration: 15000,
                gap: 13,
                delayBeforeStart: 0,
                direction: 'up',
                duplicated: true,
                startVisible: true
            });
        });
    });
</script>
