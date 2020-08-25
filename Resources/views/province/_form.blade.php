<div data-repeater-item class="outer">
    @component('common-components.forms.text')
        @slot('field') {{localize_field('name')}} @endslot
        @slot('label') {{ _t('name_province').  _t('province') }}@endslot
        @slot('placeholder') {{ _t('enter') . ' ' . _t('name') . '...' }} @endslot
    @endcomponent

    @component('common-components.forms.text')
        @slot('field')    gso_id @endslot
        @slot('label') {{ _t('code_province') }} @endslot
        @slot('placeholder') {{ _t('enter') . ' ' . _t('name') . '...' }} @endslot
    @endcomponent

    @component('vietnamzone::province.text-hidden')
        @slot('field') id @endslot
        @slot('label') @endslot
        @slot('placeholder') @endslot
    @endcomponent

    @component('common-components.forms.select',[
        'options' => \Modules\VietNamZone\Entities\VietNamZone::statuses(),
        'props' => [],
    ])
        @slot('field') active @endslot
        @slot('label') {{ _t('status') }} @endslot
    @endcomponent
</div>
