import app from 'flarum/common/app';

app.initializers.add('serakoi/flarum-hide-profile', () => {
  app.extensionData
  .for('flarum-hide-profile')
  .registerSetting({
      label: app.translator.trans('flarum-hide-profile.admin.settings.bannerText'),
      setting: 'flarum-hide-profile.bannerText',
      type: 'text',
  })
});
