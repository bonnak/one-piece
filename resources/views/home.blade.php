@extends('layouts.app')

@section('content')
<div class="bg-white rounded overflow-hidden shadow">
    <div class="px-6 py-4">
        <h3 class="text-grey-darker text-sm font-semi-bold">Watch Latest Movies</h3>
    </div>
    
    <!-- <div class="vdo-player" 
        style="background-image: url('https://2.bp.blogspot.com/-WvkxxsCv0Ug/WdNuHXhN1gI/AAAAAAAAB4w/liHVpuk14LsF0mEgqmd7rWLaFEYtgOnVACHMYCw/s0')">
    </div> -->
    <div class="relative flex justify-center items-center">
        <img class="w-full" src="https://2.bp.blogspot.com/-WvkxxsCv0Ug/WdNuHXhN1gI/AAAAAAAAB4w/liHVpuk14LsF0mEgqmd7rWLaFEYtgOnVACHMYCw/s0">
        <img class="absolute w-32" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAH0AAAB9BAMAAAB9rnEWAAAAJ1BMVEUAAAD///////////////////////////////////////////////+uPUo5AAAADHRSTlMA6teXxGOtDXw1IUzALqFxAAAE8UlEQVR4AaWVy28cRRDG27Ed2+uLbWQ5hzlYIebpw4YQgsAHIysg5D1EGKQAPlhgDsAc1rykwB6MAopEfDCKEAdyWCkoQooPjiKBhHJgdmc3GNcfxY67eqYfVd29cp3s2f51V9f3dZXg47eb2+dnZ+cufHz7VzF01DbegDKytQ+GxB81wIyn/xqCnroITmSfR+NfN1x8EM+14/B7CYkD9A9j8DvARh6xwT0ej9lg0ocDdJuByjf8PMz78TSAA6z7+L0gDlDn8W+spXNvXrr0ykeWnJ19NntjZefVv+Xnb395ydigx/Gb2qLsE91tDy5G3ECX7in7uTzScusHi7fkyjyuKbsVOH6J+n264U9gL+SR6WVfAtXx/3IeHU88CZTH91l9xZd8ApNhewzivlqV279sRtjTs2wqaC6sYVkk8/uO+n7Nz4uHaqF5TaXtcQAXNSXiAlm9/RAvvqAkPMCPR0G8SlVvhWn08UKcwbWLbvWPI3AxkThKnYksvnnZyuZ7Udrb2a6qD7Uo61Xx2LrtWWxZkbgYtdYfxIsnwypXat0nGFivGfP67Wh+xKg3XqcbjSsFOvK/lvzvn3heeVjaFXvC7hD8gd7Flkn17lz28Kj4E+0yPeeKV3m+pjWhUUMMFcWTeJHfYKXKeYS8/snXz0IFKAp4135NJ7Hjr+lYdegKOVEkn3EverzqIctk68Bb5YwpJ0oBqr8o3u7zZaTq1GndCi7PibCpPD9Kt66SZ0SQAuRlJdssD7coHltmExc6vUfjSREw7X2Uv+/hobPLCngNm2HPx0PfnSv4aurYi468PHSbjAG20H7/MfVRMe8kIG23ikZYCPCwbi+Q3CK2osUQD69ZC2Tei2UeId5+i7JuM8hvhfl8n+STWN56SpsGX4/gzUWPh+ePTnn+8Sn5BYqPrj9kbZ6P0B+ukPrF+s9uZMp/aSRvN1LFyX2ehPi+3eDUvZn3b/H5ob1A+VbWsefn3RaIE7iO/a/r5TO3BWP/2xUtmZ+Xv+LgVf/F/m83uDENf9vFq/6PGx3yPDnBZNqd8iJ1lqcnaDn/sJAzHN+lJ3haypaQBlB87o6OIrD9F21/hRRQ8dTsE+XUL2wvG1FG8/TwFuJsVbUWKYDk1xkcx/8JhFutEvw8h+OlM+0qVgELWyw1ORzLJ4uWKCvoMZD1HHu6Mp2cunvKykbcX2vzfEu/c6vSIjZSveZYwF48jp5FzaeAdIAnxsyX0aCfEB/ScmXTvGv+G47EPBB7QT8WnwSz50z534oTB3ZjQDmO4/BaYgs+AqSFmNhxVuMTMAc0Gw3d/DLkMIJOMwJHuxkdDwWN8rB8usXoqALfE+ThBNRS871iSeGFII9a4dtVgZJCFpLgKyDNglOEGORmTGClnX69Qu9rx8/AVFqpAl1fCcs0syYni6/tjavs4VnntzIBet4WUUv54yth6Hlf1K5MkTR6lQB8SuLfl793yNacejeoVThx+yLKkT+Iq/YJ32m7Z4xE1f0GL+En4/CNRPvtLaa+k9oagGfeV8fc2GjoP3RZfR8aG8Dc2o/vfXj95nZifuYdOpGaK8l4nsV1g7HhsadTAiK6gQ7zux/vBFv0Oz482w3h3g2yW2FciHdPhwvxJ43nsfNR/EHJeK4diw8m8g9O4V8XQ8WDl3XXdi63h8MHceP69vnZQcxdWLvN0/8Dpj1ulfDcMG0AAAAASUVORK5CYII=">
    </div>
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Episode 826</div>
        <p class="text-grey-darker text-base">
            Sanji Comes Back! Crash! The Tea Party from Hell! 
        </p>
    </div>
    <div class="px-6 py-4">
        @foreach($movies->chunk(4) as $chunk)
            <div class="flex -mx-4 mb-6">
                @foreach($chunk as $movie)
                    <div class="w-1/4 px-4">                   
                        <a href="#" class="no-underline">
                            <div class="relative flex justify-center items-center">
                                <img class="w-full" src="https://2.bp.blogspot.com/-WvkxxsCv0Ug/WdNuHXhN1gI/AAAAAAAAB4w/liHVpuk14LsF0mEgqmd7rWLaFEYtgOnVACHMYCw/s0">
                                <img class="absolute w-12" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAH0AAAB9BAMAAAB9rnEWAAAAJ1BMVEUAAAD///////////////////////////////////////////////+uPUo5AAAADHRSTlMA6teXxGOtDXw1IUzALqFxAAAE8UlEQVR4AaWVy28cRRDG27Ed2+uLbWQ5hzlYIebpw4YQgsAHIysg5D1EGKQAPlhgDsAc1rykwB6MAopEfDCKEAdyWCkoQooPjiKBhHJgdmc3GNcfxY67eqYfVd29cp3s2f51V9f3dZXg47eb2+dnZ+cufHz7VzF01DbegDKytQ+GxB81wIyn/xqCnroITmSfR+NfN1x8EM+14/B7CYkD9A9j8DvARh6xwT0ej9lg0ocDdJuByjf8PMz78TSAA6z7+L0gDlDn8W+spXNvXrr0ykeWnJ19NntjZefVv+Xnb395ydigx/Gb2qLsE91tDy5G3ECX7in7uTzScusHi7fkyjyuKbsVOH6J+n264U9gL+SR6WVfAtXx/3IeHU88CZTH91l9xZd8ApNhewzivlqV279sRtjTs2wqaC6sYVkk8/uO+n7Nz4uHaqF5TaXtcQAXNSXiAlm9/RAvvqAkPMCPR0G8SlVvhWn08UKcwbWLbvWPI3AxkThKnYksvnnZyuZ7Udrb2a6qD7Uo61Xx2LrtWWxZkbgYtdYfxIsnwypXat0nGFivGfP67Wh+xKg3XqcbjSsFOvK/lvzvn3heeVjaFXvC7hD8gd7Flkn17lz28Kj4E+0yPeeKV3m+pjWhUUMMFcWTeJHfYKXKeYS8/snXz0IFKAp4135NJ7Hjr+lYdegKOVEkn3EverzqIctk68Bb5YwpJ0oBqr8o3u7zZaTq1GndCi7PibCpPD9Kt66SZ0SQAuRlJdssD7coHltmExc6vUfjSREw7X2Uv+/hobPLCngNm2HPx0PfnSv4aurYi468PHSbjAG20H7/MfVRMe8kIG23ikZYCPCwbi+Q3CK2osUQD69ZC2Tei2UeId5+i7JuM8hvhfl8n+STWN56SpsGX4/gzUWPh+ePTnn+8Sn5BYqPrj9kbZ6P0B+ukPrF+s9uZMp/aSRvN1LFyX2ehPi+3eDUvZn3b/H5ob1A+VbWsefn3RaIE7iO/a/r5TO3BWP/2xUtmZ+Xv+LgVf/F/m83uDENf9vFq/6PGx3yPDnBZNqd8iJ1lqcnaDn/sJAzHN+lJ3haypaQBlB87o6OIrD9F21/hRRQ8dTsE+XUL2wvG1FG8/TwFuJsVbUWKYDk1xkcx/8JhFutEvw8h+OlM+0qVgELWyw1ORzLJ4uWKCvoMZD1HHu6Mp2cunvKykbcX2vzfEu/c6vSIjZSveZYwF48jp5FzaeAdIAnxsyX0aCfEB/ScmXTvGv+G47EPBB7QT8WnwSz50z534oTB3ZjQDmO4/BaYgs+AqSFmNhxVuMTMAc0Gw3d/DLkMIJOMwJHuxkdDwWN8rB8usXoqALfE+ThBNRS871iSeGFII9a4dtVgZJCFpLgKyDNglOEGORmTGClnX69Qu9rx8/AVFqpAl1fCcs0syYni6/tjavs4VnntzIBet4WUUv54yth6Hlf1K5MkTR6lQB8SuLfl793yNacejeoVThx+yLKkT+Iq/YJ32m7Z4xE1f0GL+En4/CNRPvtLaa+k9oagGfeV8fc2GjoP3RZfR8aG8Dc2o/vfXj95nZifuYdOpGaK8l4nsV1g7HhsadTAiK6gQ7zux/vBFv0Oz482w3h3g2yW2FciHdPhwvxJ43nsfNR/EHJeK4diw8m8g9O4V8XQ8WDl3XXdi63h8MHceP69vnZQcxdWLvN0/8Dpj1ulfDcMG0AAAAASUVORK5CYII=">
                            </div>
                        </a>
                        <div class="mt-1">
                            <a href="#" class="block no-underline hover:underline text-grey-darkest">{{ $movie->episode }}</a>
                            <span class="text-grey-darker text-xs">{{ str_limit($movie->description, 100) }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>

<div class="bg-white rounded overflow-hidden shadow mt-6">
    <div class="px-6 py-4">
        <h3 class="text-grey-darker text-sm font-semi-bold">Read Latest Monga Chapter</h3>
    </div>
    <div class="px-6 py-4">
        @foreach($mongas as $monga)
            <div class="flex mb-6">
                <div class="w-2/3"> 
                    <div class="mt-1">
                        <a href="#" class="no-underline hover:underline text-grey-darkest">{{ $monga->chapter_name }}</a>
                    </div>
                </div>
                <div class="w-1/3">
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
