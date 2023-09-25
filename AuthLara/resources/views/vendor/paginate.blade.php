@if ($paginator->hasPages())
                    <nav aria-label="..." class="">
                        <ul class="pagination">
                            @if ($paginator->onFirstPage())
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                                @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="-1">Previous</a>
                                    @endif
                                
                            </li>
                           @for($i = 1; $i <= $paginator->lastPage(); $i++)
                           @if($paginator->currentPage() == $i)
                           <li class="page-item active">
                            @else
                            <li class="page-item">
                            @endif
                            <a class="page-link" href="{{$paginator->path() . '?page='. $i}}">{{$i}}</a>
                            
                            </li>
                            @endfor
                            @if($paginator->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $paginator->nextPageUrl() }}">Next</a>
                                @else 
                                <li class="page-item disabled">
                                    <a class="page-link" href="#">Next</a>
                                    @endif
                            </li>
                        </ul>
                    </nav>
                    @endif