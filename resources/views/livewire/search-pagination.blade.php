
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <input type="text"  class="form-control" placeholder="Search here" wire:model="searchTerm" />

            <table class="table table-bordered" style="margin: 10px 0 10px 0;">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>MY</th>
                </tr>
                @foreach($users as $user)
                <tr>
                    <td>
                        {{ $user->name }}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <td>{{ $my }}</td>
                </tr>
                @endforeach
            </table>
            {{ $users->links() }}
        </div>
    </div>
</div>
