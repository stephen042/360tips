<tr class="border-bottom">
    <td class="text-muted fs-15 fw-semibold text-center">
        {{ $counter + 1 }}.
    </td>
    <td>
        <div class="d-flex">
            @if ($user->profile_pic)
                <span class="avatar avatar-md brround">
                    <img src="{{ asset('storage/' . $user->profile_pic) }}" alt="User Avatar"
                        class="avatar avatar-md brround">
                </span>
            @else
                <span class="avatar avatar-md brround mt-1" style="background-image: url(../assets/images/profile.png)">
                </span>
            @endif

            <div class="ms-2 mt-0 mt-sm-2 d-block">
                <h6 class="mb-0 fs-14 fw-semibold">
                    {{ $user->first_name . ' ' . $user->last_name }}
                </h6>
                <span class="fs-12 text-muted">{{ $user->email }}</span>
            </div>
        </div>
    </td>
    <td class="text-muted fs-15 fw-semibold">
        {{ $user->country }}</td>
    <td class="text-muted fs-15 fw-semibold">
        {{ date('Y/M/d', strtotime($user->created_at)) }} </td>
    <td class="text-muted fs-15 fw-semibold">
        ${{ number_format($user->balance, 2) }} </td>
    <td class="text-muted fs-15 fw-semibold">
        ${{ number_format($user->sub_balance, 2) }}</td>
    <td class="text-success fs-15 fw-semibold">
        <a href="{{ route('admin_ai_trade', [$user->id]) }}" target="_blank" class="btn btn-success btn-sm ">
            Ai Trade
            <i class="fas fa-user-astronaut"></i>
        </a>
    </td>
    <td>
        <a class="btn btn-primary btn-sm rounded-11 me-2" href="{{route('edit_user',[$user->id])}}">
            <i class="far fa-edit"></i>
            manage
        </a>
        <form method="POST" action="{{ route('delete_user', [$user->id]) }}" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger confirm btn-sm rounded-11 me-2">
                <i class="fas fa-trash-alt"></i>
            </button>
        </form>
    </td>
</tr>
