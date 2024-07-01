import app from 'flarum/admin/app';

app.initializers.add('mattoid/flarum-ext-store-check-in', () => {
  app.extensionData.for("mattoid-store-check-in")
    .registerPermission(
      {
        icon: 'fas fa-id-card',
        label: app.translator.trans('mattoid-store-check-in.admin.settings.group-view'),
        permission: 'mattoid-store-check-in.group-view',
        allowGuest: true
      }, 'view')
});
