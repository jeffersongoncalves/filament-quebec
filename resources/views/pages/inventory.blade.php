<x-filament-panels::page>
    @php
        $label = \JeffersonGoncalves\Filament\Quebec\Pages\PersonalDataInventory::label(...);
    @endphp

    @forelse ($this->getInventory() as $model => $rows)
        <x-filament::section :heading="class_basename($model)" :description="$rows[0]['table']">
            <div style="overflow-x: auto;">
                <table style="width: 100%; font-size: 0.875rem; border-collapse: collapse; text-align: left;">
                    <thead>
                        <tr style="opacity: 0.7;">
                            @foreach (['column', 'category', 'purpose', 'flags', 'retention', 'anonymize'] as $heading)
                                <th style="padding: 0.5rem; font-weight: 600;">{{ __("filament-quebec::filament-quebec.fields.{$heading}") }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $row)
                            <tr style="border-top: 1px solid rgba(127, 127, 127, 0.2);">
                                <td style="padding: 0.5rem; font-family: monospace;">{{ $row['column'] }}</td>
                                <td style="padding: 0.5rem;">
                                    <x-filament::badge :color="$row['category'] !== 'personal' ? 'danger' : 'gray'" style="display: inline-flex;">
                                        {{ $label('category', $row['category']) }}
                                    </x-filament::badge>
                                </td>
                                <td style="padding: 0.5rem;">
                                    @if ($row['purpose'])
                                        {{ $row['purpose'] }}
                                    @else
                                        <span style="color: rgb(220, 38, 38);">{{ __('filament-quebec::filament-quebec.missing') }}</span>
                                    @endif
                                </td>
                                <td style="padding: 0.5rem;">
                                    @foreach (['outside_quebec', 'profiling'] as $flag)
                                        @if ($row[$flag])
                                            <x-filament::badge color="warning" style="display: inline-flex;">{{ $label('flags', $flag) }}</x-filament::badge>
                                        @endif
                                    @endforeach
                                </td>
                                <td style="padding: 0.5rem;">{{ $row['retention'] ?? '-' }}</td>
                                <td style="padding: 0.5rem;">{{ $label('anonymize', $row['anonymize']) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </x-filament::section>
    @empty
        <x-filament::section>
            {{ __('filament-quebec::filament-quebec.empty') }}
        </x-filament::section>
    @endforelse
</x-filament-panels::page>
