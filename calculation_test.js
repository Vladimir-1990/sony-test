
Feature('calculation');

Scenario('test calculation', (I) => {
  I.amOnPage('/');
  I.see('Boat Calculation');
  I.seeElement({id: 'hull-length'});
  I.seeElement({id: 'buttoc-angle'});
  I.seeElement({id: 'displacement'});
  I.fillField('#hull-length', '26');
  I.fillField('#buttoc-angle', '2');
  I.fillField('#displacement', '50');
  I.click('#calculate');
  I.see('12.75', '#hull-speed');
  I.see('5.54', '#hp');

});
