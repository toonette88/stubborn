import { Application } from '@hotwired/stimulus';

import 'bootstrap';
const app = Application.start(require.context(
    '@symfony/stimulus-bridge/lazy-controller-loader!./controllers',
    true,
    /\.(j|t)sx?$/
));
