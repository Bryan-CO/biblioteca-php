import { Dialog } from "primereact/dialog";
import { Dispatch, SetStateAction } from "react";
import "../assets/dialog.css";

interface DialogProps {
  component: JSX.Element;
  header: string;
  visible: boolean;
  setVisible: Dispatch<SetStateAction<boolean>>;
}

export default function Modal({
  component,
  visible,
  setVisible,
  header,
}: DialogProps) {
  return (
    <Dialog
      className="custom-dialog-header"
      header={header}
      visible={visible}
      style={{
        width: "50vw",
        background: "white",
        padding: "1.5% 2rem",
        border: "none",
      }}
      onHide={() => {
        if (!visible) return;
        setVisible(false);
      }}
    >
      {component}
    </Dialog>
  );
}
