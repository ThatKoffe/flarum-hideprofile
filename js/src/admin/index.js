app.initializers.add('serakoi/flarum-hideprofile', () => {
  app.extensionData
    .for('HideProfile')
    .registerSetting({
        label: app.translator.trans('HideProfile.admin.settings.bannerText'),
        setting: 'HideProfile.bannerText',
        type: 'text',
    })
});
