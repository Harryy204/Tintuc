<?php
$link_limit = 11;
?>
@if ($paginator->lastPage() > 1)
    <div class="pagination-area pb-45 text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-wrap d-flex justify-content-center">
                        <nav class="Page navigation example">
                            <ul class="pagination justify-content-start">
                                <li class="page-item {{ ($paginator->currentPage() == 1) ? 'disabled ' : '' }}">
                                    <a class="page-link" href="{{ $paginator->url($paginator->currentPage()-1) }}" aria-label="Previous">
                                        <span class="flaticon-arrow roted"></span>
                                    </a>
                                </li>
                                @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                                    <?php
                                    $half_total_links = floor($link_limit / 2);
                                    $from = $paginator->currentPage() - $half_total_links;
                                    $to = $paginator->currentPage() + $half_total_links;
                                    if ($paginator->currentPage() < $half_total_links) {
                                        $to += $half_total_links - $paginator->currentPage();
                                    }
                                    if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
                                        $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
                                    }
                                    ?>
                                    @if ($from < $i && $i < $to)
                                        <li class="page-item {{ ($paginator->currentPage() == $i) ? ' active ' : '' }}">
                                            <a class="page-link"  href="{{ $paginator->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endif
                                @endfor
                                <li class="page-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
                                    <a class="page-link" href="{{ $paginator->url($paginator->currentPage()+1) }}" aria-label="Next">
                                        <span class="flaticon-arrow right-arrow"></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
