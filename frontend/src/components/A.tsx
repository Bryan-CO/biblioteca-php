import React, { useState } from 'react';
import { SelectPicker } from 'rsuite';
import 'rsuite/dist/rsuite.min.css';

const TestSelect = () => {
  const optionsAutores = [
    { label: 'Autor 1', value: '1' },
    { label: 'Autor 2', value: '2' },
    { label: 'Autor 3', value: '3' },
  ];

  const [autor, setAutor] = useState(null);

  return (
    <SelectPicker
      size="lg"
      data={optionsAutores}
      value={autor}
      placeholder="Selecciona un autor"
      onChange={(value) => setAutor(value)}
      style={{ width: 300 }}
    />
  );
};

export default TestSelect;
