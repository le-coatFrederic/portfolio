package online.fredinfo.portfolio.models;

import java.util.Set;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.ManyToMany;
import jakarta.persistence.Table;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

@Entity
@Table(name = "techs")
@Data
@NoArgsConstructor
@AllArgsConstructor
public class Tech {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
    private String name;
    private String url;
    private String icon;

    @ManyToMany(mappedBy = "techs")
    private Set<Project> projects;

    public Tech(String name, String url, String icon, Set<Project> projects) {
        this.name = name;
        this.url = url;
        this.icon = icon;
        this.projects = projects;
    }
}