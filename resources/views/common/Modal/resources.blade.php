<div class="modal fade modal-lg" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Resources</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <table class="table text-nowrap align-middle mb-0 gap-3">
                    <thead>
                        <tr>
                            <th class="fs-4 fw-bolder">Title</th>
                            <th class="fs-4 fw-bolder">Name</th>
                            <th class="fs-4 fw-bolder">Added on</th>
                        </tr>
                    </thead>
                    <tbody class="text-dark">
                        @foreach ($session->resources as $record)
                        <tr>
                            <td>{{ $record->title }}</td>
                            <td>  <a href="{{ asset(('assets/files/resources/'.$record->file)) }}">{{ $record->file }}</a></td>
                            <td>{{ $record->created_at }}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
