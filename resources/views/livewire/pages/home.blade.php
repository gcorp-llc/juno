<div>
    @if($settings->pc_banner)
        <livewire:components.banners/>
    @endif
    @if($settings->info)
        <livewire:components.info/>
    @endif
    <livewire:components.services/>
    <livewire:components.comments/>
    <livewire:components.posts/>
    <livewire:components.faq/>

</div>
