import { Dropdown } from "primereact/dropdown";
import "../assets/combo.css";

interface ComboProps<T> {
  title: string;
  data: T[];
  item: T;
  onChange: (value: unknown) => void;
  optionalLabel: keyof T;
  optionalValue: keyof T;
}

export const Combo = <T extends object>({
  title,
  data,
  item,
  onChange,
  optionalLabel,
  optionalValue,
}: ComboProps<T>) => {
  return (
    <div className="combo-box">
      <label>{title}</label>
      <Dropdown
        options={data}
        value={item}
        onChange={(e) => onChange(e.value)}
        optionLabel={optionalLabel.toString()}
        optionValue={optionalValue.toString()}
      />
    </div>
  );
};
