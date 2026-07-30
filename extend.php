<?php

namespace MarkHitchk\AdminTheme;

use Flarum\Extend;

$settings = (new Extend\Settings())
    ->default('markhitchk-admin-theme.accent_color', '#00ffff')
    ->default('markhitchk-admin-theme.secondary_color', '#7f5cff')
    ->default('markhitchk-admin-theme.text_color', '#e8e8e8')
    ->default('markhitchk-admin-theme.muted_color', '#9eb2b8')
    ->default('markhitchk-admin-theme.background_color', '#090d0f')
    ->default('markhitchk-admin-theme.surface_color', '#141414')
    ->default('markhitchk-admin-theme.surface_opacity', '90')
    ->default('markhitchk-admin-theme.border_opacity', '24')
    ->default('markhitchk-admin-theme.glow_opacity', '28')
    ->default('markhitchk-admin-theme.shadow_strength', '34')
    ->default('markhitchk-admin-theme.logo_url', '')
    ->default('markhitchk-admin-theme.logo_size', '46')
    ->default('markhitchk-admin-theme.blur_amount', '16')
    ->default('markhitchk-admin-theme.corner_radius', '14')
    ->default('markhitchk-admin-theme.show_logo', '1')
    ->default('markhitchk-admin-theme.title_3d', '1')
    ->default('markhitchk-admin-theme.background_effects', '1')
    ->default('markhitchk-admin-theme.animations', '1')
    ->default('markhitchk-admin-theme.compact_mode', '0')
    ->default('markhitchk-admin-theme.custom_css', '');

return [
    (new Extend\Frontend('admin'))
        ->js(__DIR__ . '/js/dist/admin.js')
        ->css(__DIR__ . '/resources/less/admin.less'),

    new Extend\Locales(__DIR__ . '/resources/locale'),

    $settings,
];
