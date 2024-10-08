import { InputText } from "primereact/inputtext";
import { useState } from "react";
import "../assets/inputData.css";

interface InputDataProps {
  data?: string | number;
  title: string;
  disabled: boolean;
}

export const InputData = ({
  disabled = false,
  data,
  title,
  onChange
}: InputDataProps) => {
  const [value, setValue] = useState(data?.toString());

  return (
    <div className="input-data">
      <label htmlFor="username">{title}</label>
      <InputText
        id="username"
        value={value}
        onChange={onChange}
        disabled={disabled}
      />
    </div>
  );
};
