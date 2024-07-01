import app from 'flarum/forum/app';
import { extend } from 'flarum/extend';
import UserCard from 'flarum/components/UserCard';

app.initializers.add('mattoid/flarum-ext-store-check-in', () => {

  extend(UserCard.prototype, 'infoItems', function (items) {
    items.add('checkinCard',
      <span>{app.translator.trans('mattoid-store-check-in.forum.label.checkin-card') + '：' + this.attrs.user.data.attributes['checkinCard']}</span>
    )
  })
});
