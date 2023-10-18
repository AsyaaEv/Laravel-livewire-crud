<div>
    <div class="container">
        <div class="card">
            <div class="card-header">{{ __('Post List') }}</div>
            <div class="card-body">
                <div class="mb-3">
                    <input type="text" placeholder="Search" class="form-control" wire:model.live="keyword">
                </div>
                <table class="table table-hovered">
                    <thead>
                        <td>{{ __('ID') }}</td>
                        <td>{{ __('Title') }}</td>
                        <td>{{ __('Action') }}</td>
                    </thead>
                    @if (!empty($posts))
                        @foreach ($posts as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>
                                    <a href="{{ url('post/edit/' . $item->id) }}" class="btn btn-sm btn-primary">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#deletePost{{ $item->id}}">
                                        <i class="bi bi-trash"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="deletePost{{ $item->id}}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Post ID{{$item -> id}}</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                   {{__('Are you want delete post')}} <b>'{{ $item->title}}'</b>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button data-bs-dismiss="modal" type="button" class="btn btn-primary" wire:click="deletePost({{ $item->id }})">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </table>
            </div>
        </div>
    </div>
</div>
